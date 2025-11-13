<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

class ApplyDemoMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        // Apply demo middleware to all routes that modify data
        $this->applyDemoMiddlewareToRoutes();
        
        return $next($request);
    }

    /**
     * Apply demo middleware to all modification routes
     */
    private function applyDemoMiddlewareToRoutes()
    {
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
     *
     * @param array $methods
     * @param string|null $name
     * @param string $uri
     * @return bool
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
