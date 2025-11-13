<!-- Demo Mode Popup -->
<div id="demoModePopup" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="demoModePopupLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header bg-warning text-dark">
                <h5 class="modal-title" id="demoModePopupLabel">
                    <i class="fas fa-exclamation-triangle me-2"></i>
                    Demo Version
                </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body text-center">
                <div class="mb-4">
                    <i class="fas fa-lock fa-3x text-warning mb-3"></i>
                    <h4 class="text-dark">This is a Demo Version</h4>
                    <p class="text-muted">
                        You are currently using the demo version of our application. 
                        To add, update, or delete data, please upgrade to the full version.
                    </p>
                </div>
                <div class="d-grid gap-2">
                    <a href="{{ config('demo_mode.upgrade_url', 'https://shareablecards.com/') }}" target="_blank" class="btn btn-primary btn-lg">
                        <i class="fas fa-arrow-up me-2"></i>
                        Please Upgrade
                    </a>
                    <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
                        <i class="fas fa-times me-2"></i>
                        Close
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
    // Show demo mode popup when needed
    function showDemoModePopup() {
        const popup = new bootstrap.Modal(document.getElementById('demoModePopup'));
        popup.show();
    }

    // Check for demo mode error in session
    @if(session('demo_mode_error'))
        showDemoModePopup();
    @endif

    // Handle AJAX responses with demo mode
    document.addEventListener('livewire:load', function() {
        Livewire.on('demo-mode-error', function() {
            showDemoModePopup();
        });
    });

    // Override form submissions to check for demo mode
    document.addEventListener('submit', function(e) {
        const form = e.target;
        if (form.classList.contains('demo-blocked')) {
            e.preventDefault();
            showDemoModePopup();
        }
    });

    // Handle Livewire actions
    document.addEventListener('livewire:before-action', function(event) {
        const action = event.detail.action;
        const modificationActions = [
            'store', 'update', 'destroy', 'delete', 'create', 'save',
            'bulkDelete', 'deleteVcard', 'bulk-delete-vcard',
            'toggleStatus', 'toggleActive', 'toggleVerified', 'toggleSubscription',
            'approve', 'reject', 'activate', 'deactivate', 'verify', 'unverify'
        ];
        
        if (modificationActions.includes(action)) {
            event.preventDefault();
            showDemoModePopup();
        }
    });
});
</script>
