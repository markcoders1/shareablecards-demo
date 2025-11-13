<?php

return [
    /*
    |--------------------------------------------------------------------------
    | Demo Mode Configuration
    |--------------------------------------------------------------------------
    |
    | This file contains the configuration for demo mode functionality.
    | When enabled, it prevents all database modifications and shows
    | upgrade prompts to users.
    |
    */

    'enabled' => env('DEMO_MODE', true),

    'blocked_routes' => [
        // User management
        'users.store',
        'users.update',
        'users.destroy',
        'admin-users.store',
        'admin-users.update',
        'admin-users.destroy',
        
        // VCard management
        'vcards.store',
        'vcards.update',
        'vcards.destroy',
        'vcard.service.store',
        'vcard.service.update',
        'vcard.service.destroy',
        'vcard.blog.store',
        'vcard.blog.update',
        'vcard.blog.destroy',
        'gallery.store',
        'gallery.update',
        'gallery.destroy',
        'instagram-embed.store',
        'instagram-embed.update',
        'instagram-embed.destroy',
        'vcard.products.store',
        'vcard.products.update',
        'vcard.products.destroy',
        'banner.store',
        'banner.update',
        'banner.destroy',
        
        // Product management
        'products.store',
        'products.update',
        'products.destroy',
        
        // Location management
        'countries.store',
        'countries.update',
        'countries.destroy',
        'states.store',
        'states.update',
        'states.destroy',
        'cities.store',
        'cities.update',
        'cities.destroy',
        
        // Plan and feature management
        'plans.store',
        'plans.update',
        'plans.destroy',
        'features.store',
        'features.update',
        'features.destroy',
        
        // Settings
        'settings.update',
        'user-settings.update',
        'setting.update',
        'setting.front.cms.update',
        'profile.update',
        'update.profile.setting',
        'home.page.setting.update',
        'user.changePassword',
        'changePassword',
        'vcard.status',
        'vcard.verified',
        'plan.status',
        'users.status',
        'setting.TermsConditions.update',
        'setting.ManualPaymentGuides.update',
        'setting.update.theme',
        'google_analytics.update',
        'setting.front.cms.update',
        'home.page.setting.update',
        'user.setting.update',
        'setting.upgradeDatabase',
        'generateSitemap',
        
        // NFC management
        'nfc.store',
        'nfc.update',
        'nfc.destroy',
        
        // Currency and language
        'currencies.store',
        'currencies.update',
        'currencies.destroy',
        'languages.store',
        'languages.update',
        'languages.destroy',
        
        // Testimonials and galleries
        'testimonials.store',
        'testimonials.update',
        'testimonials.destroy',
        
        // Services
        'services.store',
        'services.update',
        'services.destroy',
        
        // Blogs and FAQs
        'blogs.store',
        'blogs.update',
        'blogs.destroy',
        'faqs.store',
        'faqs.update',
        'faqs.destroy',
        
        // Enquiries and subscribers
        'enquiries.store',
        'enquiries.update',
        'enquiries.destroy',
        'subscribers.store',
        'subscribers.update',
        'subscribers.destroy',
        
        // Affiliates and withdrawals
        'affiliates.store',
        'affiliates.update',
        'affiliates.destroy',
        'withdrawals.store',
        'withdrawals.update',
        'withdrawals.destroy',
        
        // Coupons
        'coupons.store',
        'coupons.update',
        'coupons.destroy',
        
        // Iframes
        'iframes.store',
        'iframes.update',
        'iframes.destroy',
        
        // Appointments
        'appointments.store',
        'appointments.update',
        'appointments.destroy',
        
        // Email subscriptions
        'email-sub',
        'email-subscriptions.store',
        'email-subscriptions.update',
        'email-subscriptions.destroy',
    ],

    'blocked_paths' => [
        'users',
        'vcards',
        'products',
        'countries',
        'states',
        'cities',
        'plans',
        'features',
        'settings',
        'user-settings',
        'front-cms',
        'profile',
        'sadmin/settings',
        'sadmin/admins',
        'sadmin/users',
        'sadmin/vcards',
        'sadmin/setting-credential',
        'sadmin/setting-payment-guide',
        'sadmin/settings/theme',
        'sadmin/google_analytics',
        'sadmin/front-cms',
        'sadmin/home_page_settings',
        'admin/user-settings',
        'sadmin/upgradeDatabase',
        'sadmin/generate-sitemap',
        'nfc',
        'currencies',
        'languages',
        'testimonials',
        'galleries',
        'services',
        'blogs',
        'faqs',
        'enquiries',
        'subscribers',
        'affiliates',
        'withdrawals',
        'coupons',
        'iframes',
        'instagram-embed',
        'appointments',
        'email-subscriptions',
    ],

    'blocked_livewire_actions' => [
        'store',
        'update',
        'destroy',
        'delete',
        'create',
        'save',
        'bulkDelete',
        'deleteVcard',
        'bulk-delete-vcard',
        'toggleStatus',
        'toggleActive',
        'toggleVerified',
        'toggleSubscription',
        'approve',
        'reject',
        'activate',
        'deactivate',
        'verify',
        'unverify',
        'bulk-delete',
        'bulk-delete-vcard',
        'bulk-delete-user',
        'bulk-delete-product',
        'bulk-delete-country',
        'bulk-delete-state',
        'bulk-delete-city',
        'bulk-delete-plan',
        'bulk-delete-feature',
        'bulk-delete-nfc',
        'bulk-delete-currency',
        'bulk-delete-language',
        'bulk-delete-testimonial',
        'bulk-delete-gallery',
        'bulk-delete-service',
        'bulk-delete-blog',
        'bulk-delete-faq',
        'bulk-delete-enquiry',
        'bulk-delete-subscriber',
        'bulk-delete-affiliate',
        'bulk-delete-withdrawal',
        'bulk-delete-coupon',
        'bulk-delete-iframe',
        'bulk-delete-appointment',
        'bulk-delete-email-subscription',
        'changePassword',
        'updateSettings',
        'updateProfile',
        'updateUserSettings',
        'updateStatus',
        'toggleStatus',
        'updateVerified',
        'toggleVerified',
    ],

    'upgrade_url' => env('DEMO_UPGRADE_URL', 'https://shareablecards.com/'),
    'upgrade_message' => 'This is a demo version. Please upgrade to perform this action.',
];
