<?php

namespace App\Traits;

trait DemoModeTrait
{
    /**
     * Check if demo mode is enabled and block the action
     *
     * @param string $action
     * @return bool
     */
    protected function checkDemoMode(string $action = null): bool
    {
        if (!config('demo_mode.enabled', true)) {
            return false;
        }

        $blockedActions = config('demo_mode.blocked_livewire_actions', []);
        
        if ($action && in_array($action, $blockedActions)) {
            $this->dispatch('demo-mode-error');
            return true;
        }

        return false;
    }

    /**
     * Check if the current action should be blocked
     *
     * @param string $action
     * @return bool
     */
    protected function isActionBlocked(string $action): bool
    {
        if (!config('demo_mode.enabled', true)) {
            return false;
        }

        $blockedActions = config('demo_mode.blocked_livewire_actions', []);
        return in_array($action, $blockedActions);
    }

    /**
     * Handle demo mode error
     */
    protected function handleDemoModeError()
    {
        $this->dispatch('demo-mode-error');
    }
}
