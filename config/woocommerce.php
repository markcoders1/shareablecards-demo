<?php

return [
    /*
    |--------------------------------------------------------------------------
    | WooCommerce Webhook Configuration
    |--------------------------------------------------------------------------
    |
    | Configuration for WooCommerce webhook integration.
    | Add your webhook secret here for signature verification.
    |
    */

    'webhook_secret' => env('WOocommerce_WEBHOOK_SECRET', ''),

    /*
    |--------------------------------------------------------------------------
    | Webhook URLs
    |--------------------------------------------------------------------------
    |
    | The webhook URLs to use in WooCommerce settings.
    |
    */

    'webhook_urls' => [
        'order_created' => env('APP_URL') . '/api/webhooks/woocommerce/order-created',
        'order_updated' => env('APP_URL') . '/api/webhooks/woocommerce/order-updated',
    ],

    /*
    |--------------------------------------------------------------------------
    | Webhook Settings
    |--------------------------------------------------------------------------
    |
    | Additional webhook configuration settings.
    |
    */

    'enabled' => env('WOocommerce_WEBHOOK_ENABLED', true),
    'log_webhooks' => env('WOocommerce_WEBHOOK_LOG', true),
];

