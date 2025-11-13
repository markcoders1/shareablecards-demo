# Demo Credentials Setup

This document explains how to set up and manage demo credentials for the quick login functionality.

## Initial Setup

To set up demo credentials for the first time (with random password first for security):

```bash
php artisan demo:set-credentials --random
```

This will:
1. First set random passwords for both admin and user accounts (for security)
2. Then set the hardcoded demo password (`demo123456` by default)

## Default Credentials

After running the setup command, the default credentials are:

- **Admin Account:**
  - Email: `admin@vcard.com`
  - Password: `demo123456`

- **User Account:**
  - Email: `user@vcard.com`
  - Password: `demo123456`

## Changing Credentials

### Change Password Only

To change the password for both accounts:

```bash
php artisan demo:set-credentials --password=YOUR_NEW_PASSWORD
```

### Change Email Addresses

To change the email addresses:

```bash
php artisan demo:set-credentials --admin-email=newadmin@example.com --user-email=newuser@example.com
```

### Change Both Email and Password

```bash
php artisan demo:set-credentials --admin-email=newadmin@example.com --user-email=newuser@example.com --password=NEW_PASSWORD
```

## Configuration File

The credentials are stored in `config/demo_credentials.php`. You can also set them via environment variables:

```env
DEMO_ADMIN_EMAIL=admin@vcard.com
DEMO_ADMIN_PASSWORD=demo123456
DEMO_USER_EMAIL=user@vcard.com
DEMO_USER_PASSWORD=demo123456
```

## Important Notes

1. **User Account Creation**: If the user account (`user@vcard.com`) doesn't exist, the command will automatically create it with the 'user' role.

2. **Admin Account**: The admin account must already exist. If it doesn't, create it first or use the `--admin-email` option to specify an existing admin account.

3. **Security**: Always use the `--random` flag when setting up credentials for the first time to ensure old passwords are replaced with random ones before setting the demo password.

4. **Quick Login**: The login buttons on `/login` page use these credentials automatically via `Auth::attempt()`.

## Troubleshooting

If the login buttons are not working:

1. Check if the accounts exist:
   ```bash
   php artisan tinker
   >>> \App\Models\User::whereEmail('admin@vcard.com')->first();
   >>> \App\Models\User::whereEmail('user@vcard.com')->first();
   ```

2. Verify credentials are set correctly:
   ```bash
   php artisan demo:set-credentials
   ```

3. Check if accounts are active and verified:
   ```bash
   php artisan tinker
   >>> $user = \App\Models\User::whereEmail('admin@vcard.com')->first();
   >>> $user->is_active; // Should be 1
   >>> $user->email_verified_at; // Should not be null
   ```

