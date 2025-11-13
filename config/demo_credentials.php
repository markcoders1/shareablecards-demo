<?php

return [
    /*
    |--------------------------------------------------------------------------
    | Demo Mode Credentials
    |--------------------------------------------------------------------------
    |
    | These credentials are used for quick login functionality in demo mode.
    | You can change these credentials using the artisan command:
    | php artisan demo:set-credentials
    |
    */

    'admin' => [
        'email' => env('DEMO_ADMIN_EMAIL', 'admin@vcard.com'),
        'password' => env('DEMO_ADMIN_PASSWORD', 'demo123456'),
    ],

    'user' => [
        'email' => env('DEMO_USER_EMAIL', 'user@vcard.com'),
        'password' => env('DEMO_USER_PASSWORD', 'demo123456'),
    ],
];

