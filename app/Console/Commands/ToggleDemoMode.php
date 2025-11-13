<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\File;

class ToggleDemoMode extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'demo:toggle {--enable : Enable demo mode} {--disable : Disable demo mode}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Enable or disable demo mode';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $enable = $this->option('enable');
        $disable = $this->option('disable');

        if ($enable && $disable) {
            $this->error('Cannot both enable and disable demo mode at the same time.');
            return 1;
        }

        if (!$enable && !$disable) {
            $this->error('Please specify either --enable or --disable option.');
            return 1;
        }

        if ($enable) {
            $this->enableDemoMode();
        } else {
            $this->disableDemoMode();
        }

        return 0;
    }

    /**
     * Enable demo mode
     */
    private function enableDemoMode()
    {
        $this->updateEnvFile('DEMO_MODE', 'true');
        $this->info('Demo mode enabled successfully!');
        $this->warn('All database modification operations will now be blocked.');
    }

    /**
     * Disable demo mode
     */
    private function disableDemoMode()
    {
        $this->updateEnvFile('DEMO_MODE', 'false');
        $this->info('Demo mode disabled successfully!');
        $this->info('Database modification operations are now allowed.');
    }

    /**
     * Update .env file
     */
    private function updateEnvFile($key, $value)
    {
        $envFile = base_path('.env');
        
        if (!File::exists($envFile)) {
            $this->error('.env file not found!');
            return;
        }

        $content = File::get($envFile);
        
        // Check if key exists
        if (strpos($content, "{$key}=") !== false) {
            // Update existing key
            $content = preg_replace(
                "/^{$key}=.*$/m",
                "{$key}={$value}",
                $content
            );
        } else {
            // Add new key
            $content .= "\n{$key}={$value}\n";
        }
        
        File::put($envFile, $content);
    }
}
