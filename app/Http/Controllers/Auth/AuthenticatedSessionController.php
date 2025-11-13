<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Contracts\View\View;
use App\Http\Controllers\Controller;
use App\Mail\PlanExpirationReminder;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\Setting;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\RedirectResponse;
use Illuminate\Contracts\View\Factory;
use App\Http\Requests\Auth\LoginRequest;
use Illuminate\Validation\ValidationException;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Support\Facades\Cookie;

class AuthenticatedSessionController extends Controller
{
    /**
     * Display the login view.
     *
     * @return Application|Factory|View|\Illuminate\View\View
     */
    public function create(): \Illuminate\View\View
    {
        $registerImage = Setting::where('key', 'register_image')->value('value');

        return view('auth.login', ['registerImage' => $registerImage]);

    }

    /**
     * Handle an incoming authentication request.
     */
    public function store(LoginRequest $request): RedirectResponse
    {
        if (! isset($request->remember)) {
            Cookie::queue(Cookie::forget('email'));
            Cookie::queue(Cookie::forget('password'));
            Cookie::queue(Cookie::forget('remember'));
        } else {
            Cookie::queue('email', $request->email, 3600);
            Cookie::queue('password', $request->password, 3600);
            Cookie::queue('remember', 1, 3600);
        }
        $user = User::whereEmail($request->email)->first();

        if (! empty($user)) {
            if ($user['email_verified_at'] != null) {
                if ($user['is_active'] == User::IS_ACTIVE) {
                    $request->authenticate();

                    $request->session()->regenerate();

                    if ($user->hasRole('admin') && $request->redirect == "delete") {
                        return redirect()->route('delete-account');
                    }

                    return redirect()->intended(getDashboardURL());
                } else {
                    throw ValidationException::withMessages([
                        'email' => __('auth.account_deactivate'),
                    ]);
                }
            } else {
                throw ValidationException::withMessages([
                    'email' => __('auth.email_verify'),
                ]);
            }
        } else {
            throw ValidationException::withMessages([
                'email' => __('auth.failed'),
            ]);
        }
    }

    /**
     * Quick login as Admin.
     */
    public function quickLoginAsAdmin(): RedirectResponse
    {
        $email = config('demo_credentials.admin.email');
        $password = config('demo_credentials.admin.password');
        
        // Try to login with configured email first
        $loginSuccess = Auth::attempt(['email' => $email, 'password' => $password]);
        
        // If configured email doesn't exist, try to find first admin user
        if (!$loginSuccess) {
            $adminUser = User::whereHas('roles', function($query) {
                $query->whereIn('name', ['admin', 'super_admin']);
            })->where('email_verified_at', '!=', null)
              ->where('is_active', User::IS_ACTIVE)
              ->first();
            
            if ($adminUser) {
                // Update password if needed and login
                if (Hash::check($password, $adminUser->password)) {
                    Auth::login($adminUser);
                    $loginSuccess = true;
                } else {
                    // Update password to match demo password
                    $adminUser->password = Hash::make($password);
                    $adminUser->save();
                    Auth::login($adminUser);
                    $loginSuccess = true;
                }
            }
        }
        
        if ($loginSuccess) {
            $user = Auth::user();
            
            if ($user->email_verified_at && $user->is_active == User::IS_ACTIVE) {
                request()->session()->regenerate();
                // Clear any intended URL to prevent redirect to wrong dashboard
                request()->session()->forget('url.intended');
                return redirect(getDashboardURL());
            } else {
                Auth::logout();
                return redirect()->route('home')->with('error', 'Admin account is not verified or inactive.');
            }
        }
        
        return redirect()->route('home')->with('error', 'Admin account credentials are incorrect. Please run: php artisan demo:set-credentials');
    }

    /**
     * Quick login as User.
     */
    public function quickLoginAsUser(): RedirectResponse
    {
        $email = config('demo_credentials.user.email');
        $password = config('demo_credentials.user.password');
        
        if (Auth::attempt(['email' => $email, 'password' => $password])) {
            $user = Auth::user();
            
            if ($user->email_verified_at && $user->is_active == User::IS_ACTIVE) {
                request()->session()->regenerate();
                // Clear any intended URL to prevent redirect to wrong dashboard
                request()->session()->forget('url.intended');
                return redirect(getDashboardURL());
            } else {
                Auth::logout();
                return redirect()->route('home')->with('error', 'User account is not verified or inactive.');
            }
        }
        
        return redirect()->route('home')->with('error', 'User account credentials are incorrect. Please run: php artisan demo:set-credentials');
    }

    /**
     * Destroy an authenticated session.
     */
    public function destroy(Request $request): RedirectResponse
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
