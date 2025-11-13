<?php

namespace App\Livewire;

use Livewire\Component;

class DemoModeHandler extends Component
{
    public function mount()
    {
        // This component handles demo mode functionality
    }

    public function render()
    {
        return view('livewire.demo-mode-handler');
    }

    /**
     * Handle demo mode for Livewire actions
     */
    public function handleDemoMode($action = null)
    {
        if (config('demo_mode.enabled', true)) {
            $this->dispatch('demo-mode-error');
            return;
        }
    }

    /**
     * Check if an action should be blocked in demo mode
     */
    public function isActionBlocked($action)
    {
        if (!config('demo_mode.enabled', true)) {
            return false;
        }

        $blockedActions = config('demo_mode.blocked_livewire_actions', []);
        return in_array($action, $blockedActions);
    }
}
