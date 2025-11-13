<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\RedirectResponse;

class DemoModeMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse|\Illuminate\Http\JsonResponse
     */
    public function handle(Request $request, Closure $next)
    {
        // Check if demo mode is enabled
        if (!config('demo_mode.enabled', true)) {
            return $next($request);
        }

        // Check if this is a database modification request
        if ($this->isDatabaseModificationRequest($request)) {
            // Return JSON response for AJAX requests
            if ($request->expectsJson() || $request->is('api/*')) {
                return response()->json([
                    'success' => false,
                    'message' => config('demo_mode.upgrade_message', 'This is a demo version. Please upgrade to perform this action.'),
                    'demo_mode' => true,
                    'upgrade_url' => config('demo_mode.upgrade_url', 'https://shareablecards.com/')
                ], 403);
            }
            
            // Return redirect for regular requests
            return redirect()->back()->with('demo_mode_error', config('demo_mode.upgrade_message', 'This is a demo version. Please upgrade to perform this action.'));
        }

        return $next($request);
    }

    /**
     * Check if the request is attempting to modify the database
     *
     * @param Request $request
     * @return bool
     */
    private function isDatabaseModificationRequest(Request $request): bool
    {
        $method = $request->method();
        $path = $request->path();
        $routeName = $request->route()?->getName();

        // Check for HTTP methods that modify data
        if (!in_array($method, ['POST', 'PUT', 'PATCH', 'DELETE'])) {
            return false;
        }

        // Get blocked routes from configuration
        $blockedRoutes = config('demo_mode.blocked_routes', []);
        $blockedPaths = config('demo_mode.blocked_paths', []);

        // Check if route name is in blocked routes
        if ($routeName && in_array($routeName, $blockedRoutes)) {
            return true;
        }

        // Check for specific path patterns
        foreach ($blockedPaths as $blockedPath) {
            if (str_contains($path, $blockedPath)) {
                return true;
            }
        }

        // Check for Livewire actions that modify data
        if ($request->has('_livewire') || $request->has('livewire')) {
            $livewireAction = $request->input('livewire_action') ?? $request->input('_livewire_action');
            if ($livewireAction && $this->isLivewireModificationAction($livewireAction)) {
                return true;
            }
        }

        return false;
    }

    /**
     * Check if Livewire action modifies data
     *
     * @param string $action
     * @return bool
     */
    private function isLivewireModificationAction(string $action): bool
    {
        $modificationActions = config('demo_mode.blocked_livewire_actions', []);

        return in_array($action, $modificationActions);
    }
}
