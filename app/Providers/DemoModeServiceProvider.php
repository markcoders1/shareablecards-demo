<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Blade;

class DemoModeServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        // Register demo mode middleware globally
        $this->registerDemoModeMiddleware();
        
        // Add demo mode blade directives
        $this->registerBladeDirectives();
        
        // Apply demo mode to existing routes
        $this->applyDemoModeToRoutes();
    }

    /**
     * Register demo mode middleware
     */
    private function registerDemoModeMiddleware()
    {
        // The middleware is already registered in Kernel.php
    }

    /**
     * Register blade directives for demo mode
     */
    private function registerBladeDirectives()
    {
        Blade::directive('demoMode', function ($expression) {
            return "<?php if(config('demo_mode.enabled', true)): ?>";
        });

        Blade::directive('endDemoMode', function ($expression) {
            return "<?php endif; ?>";
        });

        Blade::directive('demoBlocked', function ($expression) {
            return "<?php if(config('demo_mode.enabled', true)) echo 'demo-blocked'; ?>";
        });
    }

    /**
     * Apply demo mode to existing routes
     */
    private function applyDemoModeToRoutes()
    {
        if (!config('demo_mode.enabled', true)) {
            return;
        }

        // Get all routes
        $routes = Route::getRoutes();
        
        foreach ($routes as $route) {
            $methods = $route->methods();
            $name = $route->getName();
            $uri = $route->uri();
            
            // Check if this is a modification route
            if ($this->isModificationRoute($methods, $name, $uri)) {
                // Add demo middleware to the route
                $route->middleware('demo.mode');
            }
        }
    }

    /**
     * Check if a route is a modification route
     */
    private function isModificationRoute(array $methods, ?string $name, string $uri): bool
    {
        // Check for HTTP methods that modify data
        $modificationMethods = ['POST', 'PUT', 'PATCH', 'DELETE'];
        if (!array_intersect($methods, $modificationMethods)) {
            return false;
        }

        // Get blocked routes from configuration
        $blockedRoutes = config('demo_mode.blocked_routes', []);
        $blockedPaths = config('demo_mode.blocked_paths', []);

        // Check if route name is in blocked routes
        if ($name && in_array($name, $blockedRoutes)) {
            return true;
        }

        // Check for specific path patterns
        foreach ($blockedPaths as $blockedPath) {
            if (str_contains($uri, $blockedPath)) {
                return true;
            }
        }

        return false;
    }
}
