@if(config('demo_mode.enabled', true))
<div class="demo-topbar bg-warning text-dark text-center py-2" style="position: fixed; top: 0; left: 250px; right: 0; z-index: 9999; font-weight: 600; font-size: 14px; box-shadow: 0 2px 4px rgba(0,0,0,0.1);">
    <i class="fas fa-exclamation-triangle me-2"></i>
    This is a Demo Version - All modifications are disabled
</div>
@endif
