<?php

namespace App\Console\Commands;

use App\Models\Plan;
use App\Models\Role;
use App\Models\Subscription;
use App\Models\User;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Carbon\Carbon;

class SetDemoCredentials extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'demo:set-credentials 
                            {--random : First set random passwords for security}
                            {--admin-email= : Admin email (default: admin@vcard.com)}
                            {--user-email= : User email (default: user@vcard.com)}
                            {--password= : Password for both accounts (default: demo123456)}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Set demo credentials for quick login functionality';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $adminEmail = $this->option('admin-email') ?: config('demo_credentials.admin.email');
        $userEmail = $this->option('user-email') ?: config('demo_credentials.user.email');
        $password = $this->option('password') ?: config('demo_credentials.admin.password');

        // Step 1: Set random passwords first if --random flag is set
        if ($this->option('random')) {
            $randomPassword = Str::random(32);
            $this->info('Step 1: Setting random passwords for security...');
            
            $this->updateUserPassword($adminEmail, $randomPassword, 'Admin');
            $this->updateUserPassword($userEmail, $randomPassword, 'User');
            
            $this->info('✓ Random passwords set successfully!');
            $this->newLine();
        }

        // Step 2: Set the final hardcoded password
        $this->info('Step 2: Setting demo credentials...');
        
        $adminUpdated = $this->updateUserPassword($adminEmail, $password, 'Admin');
        $userUpdated = $this->updateUserPassword($userEmail, $password, 'User', true);

        if ($adminUpdated && $userUpdated) {
            $this->newLine();
            $this->info('✓ Demo credentials set successfully!');
            $this->newLine();
            $this->table(
                ['Account', 'Email', 'Password'],
                [
                    ['Admin', $adminEmail, $password],
                    ['User', $userEmail, $password],
                ]
            );
            $this->newLine();
            $this->comment('Note: To change these credentials, run:');
            $this->comment('  php artisan demo:set-credentials --password=YOUR_NEW_PASSWORD');
        } else {
            $this->error('Failed to set demo credentials. Please check the errors above.');
            return 1;
        }

        return 0;
    }

    /**
     * Update user password
     */
    private function updateUserPassword(string $email, string $password, string $type, bool $createIfNotExists = false): bool
    {
        $user = User::whereEmail($email)->first();

        if (!$user) {
            if ($type === 'Admin') {
                // Try to find first admin user
                $adminUser = User::whereHas('roles', function($query) {
                    $query->whereIn('name', ['admin', 'super_admin']);
                })->where('email_verified_at', '!=', null)
                  ->where('is_active', User::IS_ACTIVE)
                  ->first();
                
                if ($adminUser) {
                    $this->warn("Admin account '{$email}' not found. Using existing admin: {$adminUser->email}");
                    $user = $adminUser;
                    // Update config to use the found admin email
                    $this->comment("Note: Update config/demo_credentials.php or .env to use: DEMO_ADMIN_EMAIL={$adminUser->email}");
                } else {
                    $this->error("{$type} account not found: {$email}");
                    $this->comment("Please create the account first or use --admin-email option to specify an existing admin.");
                    return false;
                }
            } elseif ($createIfNotExists && $type === 'User') {
                $this->warn("User account not found. Creating user account: {$email}");
                
                // Create a tenant for the user
                $tenant = \App\Models\MultiTenant::create(['tenant_username' => 'demo_user']);
                
                // Create the user
                $user = User::create([
                    'first_name' => 'Demo',
                    'last_name' => 'User',
                    'email' => $email,
                    'email_verified_at' => now(),
                    'password' => Hash::make($password),
                    'tenant_id' => $tenant->id,
                    'is_active' => User::IS_ACTIVE,
                ]);

                // Assign user role
                $userRole = Role::whereName(Role::ROLE_USER)->first();
                if ($userRole) {
                    $user->assignRole($userRole);
                } else {
                    $this->error("User role not found. Please run migrations and seeders.");
                    return false;
                }

                // Create subscription for the user
                $plan = Plan::whereIsDefault(true)->first();
                if ($plan) {
                    $customFields = $plan->planCustomFields;
                    if ($plan->custom_select == 1 && $customFields->isNotEmpty()) {
                        $vcardsOfNo = $customFields->first()->custom_vcard_number;
                        $planPrice = $customFields->first()->custom_vcard_price;
                    } else {
                        $vcardsOfNo = $plan->no_of_vcards;
                        $planPrice = $plan->price;
                    }

                    Subscription::create([
                        'plan_id' => $plan->id,
                        'plan_amount' => $planPrice,
                        'plan_frequency' => $plan->frequency,
                        'starts_at' => Carbon::now(),
                        'ends_at' => $plan->frequency == Plan::UNLIMITED ? Carbon::now()->addYears(100) : Carbon::now()->addDays($plan->trial_days),
                        'trial_ends_at' => $plan->frequency == Plan::UNLIMITED ? Carbon::now()->addYears(100) : Carbon::now()->addDays($plan->trial_days),
                        'status' => Subscription::ACTIVE,
                        'tenant_id' => $tenant->id,
                        'no_of_vcards' => $vcardsOfNo,
                    ]);
                    $this->info("✓ Subscription created for user!");
                } else {
                    $this->warn("No default plan found. User account created but without subscription.");
                }

                $this->info("✓ User account created successfully!");
            } else {
                $this->error("{$type} account not found: {$email}");
                $this->comment("Please create the account first or use --user-email option.");
                return false;
            }
        }

        // Update password
        $user->password = Hash::make($password);
        $user->save();

        // If user doesn't have a subscription, create one
        if ($type === 'User') {
            $existingSubscription = Subscription::where('tenant_id', $user->tenant_id)
                ->where('status', Subscription::ACTIVE)
                ->first();
            
            if (!$existingSubscription) {
                $plan = Plan::whereIsDefault(true)->first();
                if ($plan) {
                    $customFields = $plan->planCustomFields;
                    if ($plan->custom_select == 1 && $customFields->isNotEmpty()) {
                        $vcardsOfNo = $customFields->first()->custom_vcard_number;
                        $planPrice = $customFields->first()->custom_vcard_price;
                    } else {
                        $vcardsOfNo = $plan->no_of_vcards;
                        $planPrice = $plan->price;
                    }

                    Subscription::create([
                        'plan_id' => $plan->id,
                        'plan_amount' => $planPrice,
                        'plan_frequency' => $plan->frequency,
                        'starts_at' => Carbon::now(),
                        'ends_at' => $plan->frequency == Plan::UNLIMITED ? Carbon::now()->addYears(100) : Carbon::now()->addDays($plan->trial_days),
                        'trial_ends_at' => $plan->frequency == Plan::UNLIMITED ? Carbon::now()->addYears(100) : Carbon::now()->addDays($plan->trial_days),
                        'status' => Subscription::ACTIVE,
                        'tenant_id' => $user->tenant_id,
                        'no_of_vcards' => $vcardsOfNo,
                    ]);
                    $this->info("✓ Subscription created for existing user!");
                }
            }
        }

        $this->info("✓ {$type} password updated: {$user->email}");
        return true;
    }
}
