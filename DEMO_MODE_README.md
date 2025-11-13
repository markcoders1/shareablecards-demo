# Demo Mode Implementation

This implementation adds comprehensive demo mode functionality to the Laravel SaaS application, preventing all database modifications and showing upgrade prompts to users.

## Features

- **Global Middleware**: Automatically blocks all database modification requests
- **Livewire Integration**: Prevents Livewire components from modifying data
- **JavaScript Protection**: Client-side protection for forms and buttons
- **Visual Indicators**: Shows users which actions are blocked
- **Configurable**: Easy to enable/disable via configuration
- **Comprehensive Coverage**: Covers all CRUD operations across all roles

## Files Created/Modified

### New Files Created

1. **Middleware**
   - `app/Http/Middleware/DemoModeMiddleware.php` - Main demo mode middleware
   - `app/Http/Middleware/ApplyDemoMiddleware.php` - Helper middleware for route application

2. **Configuration**
   - `config/demo_mode.php` - Demo mode configuration file

3. **Traits**
   - `app/Traits/DemoModeTrait.php` - Trait for Livewire components

4. **Livewire Components**
   - `app/Livewire/DemoModeHandler.php` - Demo mode handler component
   - `resources/views/livewire/demo-mode-handler.blade.php` - Component view

5. **Views**
   - `resources/views/components/demo-mode-popup.blade.php` - Demo mode popup component

6. **JavaScript**
   - `public/js/demo-mode.js` - Client-side demo mode protection

7. **Commands**
   - `app/Console/Commands/ApplyDemoModeToLivewire.php` - Apply demo mode to Livewire components
   - `app/Console/Commands/ToggleDemoMode.php` - Enable/disable demo mode

8. **Service Provider**
   - `app/Providers/DemoModeServiceProvider.php` - Demo mode service provider

9. **Routes**
   - `routes/demo.php` - Demo mode protected routes

### Modified Files

1. **Kernel.php** - Added demo middleware to global middleware stack
2. **RouteServiceProvider.php** - Added demo routes
3. **config/app.php** - Registered DemoModeServiceProvider
4. **layouts/app.blade.php** - Added demo mode popup and JavaScript
5. **front/layouts/app.blade.php** - Added demo mode popup
6. **UserVcardTable.php** - Added demo mode trait and checks

## Configuration

### Environment Variables

Add to your `.env` file:

```env
DEMO_MODE=true
DEMO_UPGRADE_URL=https://your-upgrade-url.com
```

### Configuration File

The `config/demo_mode.php` file contains all the configuration options:

- `enabled`: Enable/disable demo mode
- `blocked_routes`: Array of route names to block
- `blocked_paths`: Array of URL paths to block
- `blocked_livewire_actions`: Array of Livewire actions to block
- `upgrade_url`: URL for upgrade button
- `upgrade_message`: Message to show in popup

## Usage

### Enable Demo Mode

```bash
php artisan demo:toggle --enable
```

### Disable Demo Mode

```bash
php artisan demo:toggle --disable
```

### Apply Demo Mode to Livewire Components

```bash
php artisan demo:apply-livewire
```

## How It Works

### 1. Global Middleware Protection

The `DemoModeMiddleware` is applied globally and checks every request:

- Identifies modification requests (POST, PUT, PATCH, DELETE)
- Checks against blocked routes and paths
- Returns appropriate responses (JSON for AJAX, redirect for regular requests)

### 2. Livewire Component Protection

The `DemoModeTrait` provides methods for Livewire components:

- `checkDemoMode()`: Checks if an action should be blocked
- `isActionBlocked()`: Determines if an action is in the blocked list
- `handleDemoModeError()`: Dispatches demo mode error event

### 3. JavaScript Protection

The `demo-mode.js` file provides client-side protection:

- Blocks form submissions
- Blocks button clicks
- Blocks Livewire actions
- Adds visual indicators
- Shows demo mode popup

### 4. Visual Feedback

- Forms and buttons are visually disabled
- Popup appears when users try to perform blocked actions
- Clear messaging about demo version limitations

## Blocked Operations

The following operations are blocked in demo mode:

### Database Operations
- Create (store)
- Update
- Delete (destroy)
- Bulk operations

### Specific Features
- User management
- VCard management
- Product management
- Location management (countries, states, cities)
- Plan and feature management
- Settings updates
- NFC management
- Currency and language management
- Testimonials and galleries
- Services, blogs, FAQs
- Enquiries and subscribers
- Affiliates and withdrawals
- Coupons and iframes
- Appointments
- Email subscriptions

### Livewire Actions
- All CRUD operations
- Toggle operations (status, active, verified)
- Approval/rejection operations
- Bulk delete operations

## Customization

### Adding New Blocked Routes

Add route names to the `blocked_routes` array in `config/demo_mode.php`:

```php
'blocked_routes' => [
    // ... existing routes
    'new-feature.store',
    'new-feature.update',
    'new-feature.destroy',
],
```

### Adding New Blocked Paths

Add URL patterns to the `blocked_paths` array:

```php
'blocked_paths' => [
    // ... existing paths
    'new-feature',
    'another-feature',
],
```

### Adding New Livewire Actions

Add action names to the `blocked_livewire_actions` array:

```php
'blocked_livewire_actions' => [
    // ... existing actions
    'newAction',
    'anotherAction',
],
```

### Customizing the Popup

Modify the `resources/views/components/demo-mode-popup.blade.php` file to customize:

- Popup appearance
- Message text
- Button styling
- Upgrade URL

## Testing

### Test Demo Mode

1. Enable demo mode: `php artisan demo:toggle --enable`
2. Try to perform any modification operation
3. Verify that the demo mode popup appears
4. Check that no database changes occur

### Test Normal Mode

1. Disable demo mode: `php artisan demo:toggle --disable`
2. Perform modification operations
3. Verify that operations work normally

## Troubleshooting

### Demo Mode Not Working

1. Check that `DEMO_MODE=true` in `.env`
2. Clear config cache: `php artisan config:clear`
3. Check that middleware is registered in `Kernel.php`
4. Verify that service provider is registered in `config/app.php`

### Popup Not Showing

1. Check that JavaScript file is loaded
2. Verify that popup component is included in layouts
3. Check browser console for JavaScript errors

### Some Operations Still Working

1. Check that routes are in the blocked lists
2. Verify that Livewire components use the `DemoModeTrait`
3. Check that JavaScript selectors are correct

## Security Notes

- This is a client-side and middleware-level protection
- For production, consider additional server-side validation
- The demo mode can be bypassed by disabling JavaScript
- Consider implementing additional authentication checks

## Performance Considerations

- The global middleware adds minimal overhead
- JavaScript protection is lightweight
- Configuration is cached for performance
- Consider disabling demo mode in production for better performance
