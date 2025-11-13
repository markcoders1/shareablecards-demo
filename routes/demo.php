<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Demo Mode Routes
|--------------------------------------------------------------------------
|
| These routes are protected by demo mode middleware to prevent
| database modifications in demo version.
|
*/

// Apply demo middleware to all modification routes
Route::middleware(['demo.mode'])->group(function () {
    
    // User management routes
    Route::post('/users', [App\Http\Controllers\UserController::class, 'store'])->name('users.store');
    Route::put('/users/{user}', [App\Http\Controllers\UserController::class, 'update'])->name('users.update');
    Route::delete('/users/{user}', [App\Http\Controllers\UserController::class, 'destroy'])->name('users.destroy');
    
    // Admin user management routes
    Route::post('/admin-users', [App\Http\Controllers\AdminUserController::class, 'store'])->name('admin-users.store');
    Route::put('/admin-users/{adminUser}', [App\Http\Controllers\AdminUserController::class, 'update'])->name('admin-users.update');
    Route::delete('/admin-users/{adminUser}', [App\Http\Controllers\AdminUserController::class, 'destroy'])->name('admin-users.destroy');
    
    // VCard management routes
    Route::post('/vcards', [App\Http\Controllers\VcardController::class, 'store'])->name('vcards.store');
    Route::put('/vcards/{vcard}', [App\Http\Controllers\VcardController::class, 'update'])->name('vcards.update');
    Route::delete('/vcards/{vcard}', [App\Http\Controllers\VcardController::class, 'destroy'])->name('vcards.destroy');
    
    // VCard service routes
    Route::post('/vcard/services', [App\Http\Controllers\VcardServiceController::class, 'store'])->name('vcard.service.store');
    Route::post('/vcard/services/{vcardService}/update', [App\Http\Controllers\VcardServiceController::class, 'update'])->name('vcard.service.update');
    Route::delete('/vcard/services/{vcardService}', [App\Http\Controllers\VcardServiceController::class, 'destroy'])->name('vcard.service.destroy');
    
    // VCard blog routes
    Route::post('/vcard/blogs', [App\Http\Controllers\VcardBlogController::class, 'store'])->name('vcard.blog.store');
    Route::post('/vcard/blogs/{vcardBlog}/update', [App\Http\Controllers\VcardBlogController::class, 'update'])->name('vcard.blog.update');
    Route::delete('/vcard/blogs/{vcardBlog}', [App\Http\Controllers\VcardBlogController::class, 'destroy'])->name('vcard.blog.destroy');
    
    // Gallery routes
    Route::post('/vcard/galleries', [App\Http\Controllers\GalleryController::class, 'store'])->name('gallery.store');
    Route::post('/vcard/galleries/{gallery}/update', [App\Http\Controllers\GalleryController::class, 'update'])->name('gallery.update');
    Route::delete('/vcard/galleries/{gallery}', [App\Http\Controllers\GalleryController::class, 'destroy'])->name('gallery.destroy');
    
    // Instagram embed routes
    Route::post('/vcard/instagram-embed', [App\Http\Controllers\InstagramEmbedController::class, 'store'])->name('instagram-embed.store');
    Route::post('/vcard/instagram-embed/{instagramembed}/update', [App\Http\Controllers\InstagramEmbedController::class, 'update'])->name('instagram-embed.update');
    Route::delete('/vcard/instagram-embed/{instagramembed}', [App\Http\Controllers\InstagramEmbedController::class, 'destroy'])->name('instagram-embed.destroy');
    
    // VCard product routes
    Route::post('/vcard/products', [App\Http\Controllers\ProductController::class, 'store'])->name('vcard.products.store');
    Route::post('/vcard/products/{products}/update', [App\Http\Controllers\ProductController::class, 'update'])->name('vcard.products.update');
    Route::delete('/vcard/products/{products}', [App\Http\Controllers\ProductController::class, 'destroy'])->name('vcard.products.destroy');
    
    // Banner routes
    Route::post('/vcard/banners', [App\Http\Controllers\BannerController::class, 'store'])->name('banner.store');
    Route::post('/vcard/banners/{banner}/update', [App\Http\Controllers\BannerController::class, 'update'])->name('banner.update');
    Route::delete('/vcard/banners/{banner}', [App\Http\Controllers\BannerController::class, 'destroy'])->name('banner.destroy');
    
    // Product management routes
    Route::post('/products', [App\Http\Controllers\ProductController::class, 'store'])->name('products.store');
    Route::put('/products/{product}', [App\Http\Controllers\ProductController::class, 'update'])->name('products.update');
    Route::delete('/products/{product}', [App\Http\Controllers\ProductController::class, 'destroy'])->name('products.destroy');
    
    // Country management routes
    Route::post('/countries', [App\Http\Controllers\CountryController::class, 'store'])->name('countries.store');
    Route::put('/countries/{country}', [App\Http\Controllers\CountryController::class, 'update'])->name('countries.update');
    Route::delete('/countries/{country}', [App\Http\Controllers\CountryController::class, 'destroy'])->name('countries.destroy');
    
    // State management routes
    Route::post('/states', [App\Http\Controllers\StateController::class, 'store'])->name('states.store');
    Route::put('/states/{state}', [App\Http\Controllers\StateController::class, 'update'])->name('states.update');
    Route::delete('/states/{state}', [App\Http\Controllers\StateController::class, 'destroy'])->name('states.destroy');
    
    // City management routes
    Route::post('/cities', [App\Http\Controllers\CityController::class, 'store'])->name('cities.store');
    Route::put('/cities/{city}', [App\Http\Controllers\CityController::class, 'update'])->name('cities.update');
    Route::delete('/cities/{city}', [App\Http\Controllers\CityController::class, 'destroy'])->name('cities.destroy');
    
    // Plan management routes
    Route::post('/plans', [App\Http\Controllers\PlanController::class, 'store'])->name('plans.store');
    Route::put('/plans/{plan}', [App\Http\Controllers\PlanController::class, 'update'])->name('plans.update');
    Route::delete('/plans/{plan}', [App\Http\Controllers\PlanController::class, 'destroy'])->name('plans.destroy');
    
    // Feature management routes
    Route::post('/features', [App\Http\Controllers\FeatureController::class, 'store'])->name('features.store');
    Route::put('/features/{feature}', [App\Http\Controllers\FeatureController::class, 'update'])->name('features.update');
    Route::delete('/features/{feature}', [App\Http\Controllers\FeatureController::class, 'destroy'])->name('features.destroy');
    
    // Settings routes
    Route::put('/settings', [App\Http\Controllers\SettingController::class, 'update'])->name('settings.update');
    Route::put('/user-settings', [App\Http\Controllers\UserSettingController::class, 'update'])->name('user-settings.update');
    
    // NFC management routes
    Route::post('/nfc', [App\Http\Controllers\NfcController::class, 'store'])->name('nfc.store');
    Route::put('/nfc/{nfc}', [App\Http\Controllers\NfcController::class, 'update'])->name('nfc.update');
    Route::delete('/nfc/{nfc}', [App\Http\Controllers\NfcController::class, 'destroy'])->name('nfc.destroy');
    
    // Currency management routes
    Route::post('/currencies', [App\Http\Controllers\CurrencyController::class, 'store'])->name('currencies.store');
    Route::put('/currencies/{currency}', [App\Http\Controllers\CurrencyController::class, 'update'])->name('currencies.update');
    Route::delete('/currencies/{currency}', [App\Http\Controllers\CurrencyController::class, 'destroy'])->name('currencies.destroy');
    
    // Language management routes
    Route::post('/languages', [App\Http\Controllers\LanguageController::class, 'store'])->name('languages.store');
    Route::put('/languages/{language}', [App\Http\Controllers\LanguageController::class, 'update'])->name('languages.update');
    Route::delete('/languages/{language}', [App\Http\Controllers\LanguageController::class, 'destroy'])->name('languages.destroy');
    
    // Testimonial management routes
    Route::post('/testimonials', [App\Http\Controllers\TestimonialController::class, 'store'])->name('testimonials.store');
    Route::put('/testimonials/{testimonial}', [App\Http\Controllers\TestimonialController::class, 'update'])->name('testimonials.update');
    Route::delete('/testimonials/{testimonial}', [App\Http\Controllers\TestimonialController::class, 'destroy'])->name('testimonials.destroy');
    
    // Service management routes
    Route::post('/services', [App\Http\Controllers\VcardServiceController::class, 'store'])->name('services.store');
    Route::put('/services/{service}', [App\Http\Controllers\VcardServiceController::class, 'update'])->name('services.update');
    Route::delete('/services/{service}', [App\Http\Controllers\VcardServiceController::class, 'destroy'])->name('services.destroy');
    
    // Blog management routes
    Route::post('/blogs', [App\Http\Controllers\VcardBlogController::class, 'store'])->name('blogs.store');
    Route::put('/blogs/{blog}', [App\Http\Controllers\VcardBlogController::class, 'update'])->name('blogs.update');
    Route::delete('/blogs/{blog}', [App\Http\Controllers\VcardBlogController::class, 'destroy'])->name('blogs.destroy');
    
    // FAQ management routes
    Route::post('/faqs', [App\Http\Controllers\FrontFAQsController::class, 'store'])->name('faqs.store');
    Route::put('/faqs/{faq}', [App\Http\Controllers\FrontFAQsController::class, 'update'])->name('faqs.update');
    Route::delete('/faqs/{faq}', [App\Http\Controllers\FrontFAQsController::class, 'destroy'])->name('faqs.destroy');
    
    // Enquiry management routes
    Route::post('/enquiries', [App\Http\Controllers\EnquiryController::class, 'store'])->name('enquiries.store');
    Route::put('/enquiries/{enquiry}', [App\Http\Controllers\EnquiryController::class, 'update'])->name('enquiries.update');
    Route::delete('/enquiries/{enquiry}', [App\Http\Controllers\EnquiryController::class, 'destroy'])->name('enquiries.destroy');
    
    // Subscriber management routes
    Route::post('/subscribers', [App\Http\Controllers\VcardSubscribersController::class, 'store'])->name('subscribers.store');
    Route::put('/subscribers/{subscriber}', [App\Http\Controllers\VcardSubscribersController::class, 'update'])->name('subscribers.update');
    Route::delete('/subscribers/{subscriber}', [App\Http\Controllers\VcardSubscribersController::class, 'destroy'])->name('subscribers.destroy');
    
    // Affiliate management routes
    Route::post('/affiliates', [App\Http\Controllers\AffiliateUserController::class, 'store'])->name('affiliates.store');
    Route::put('/affiliates/{affiliate}', [App\Http\Controllers\AffiliateUserController::class, 'update'])->name('affiliates.update');
    Route::delete('/affiliates/{affiliate}', [App\Http\Controllers\AffiliateUserController::class, 'destroy'])->name('affiliates.destroy');
    
    // Withdrawal management routes
    Route::post('/withdrawals', [App\Http\Controllers\AffiliationWithdrawController::class, 'store'])->name('withdrawals.store');
    Route::put('/withdrawals/{withdrawal}', [App\Http\Controllers\AffiliationWithdrawController::class, 'update'])->name('withdrawals.update');
    Route::delete('/withdrawals/{withdrawal}', [App\Http\Controllers\AffiliationWithdrawController::class, 'destroy'])->name('withdrawals.destroy');
    
    // Coupon management routes
    Route::post('/coupons', [App\Http\Controllers\CouponCodeController::class, 'store'])->name('coupons.store');
    Route::put('/coupons/{coupon}', [App\Http\Controllers\CouponCodeController::class, 'update'])->name('coupons.update');
    Route::delete('/coupons/{coupon}', [App\Http\Controllers\CouponCodeController::class, 'destroy'])->name('coupons.destroy');
    
    // Iframe management routes
    Route::post('/iframes', [App\Http\Controllers\iframeController::class, 'store'])->name('iframes.store');
    Route::put('/iframes/{iframe}', [App\Http\Controllers\iframeController::class, 'update'])->name('iframes.update');
    Route::delete('/iframes/{iframe}', [App\Http\Controllers\iframeController::class, 'destroy'])->name('iframes.destroy');
    
    // Appointment management routes
    Route::post('/appointments', [App\Http\Controllers\ScheduleAppointmentController::class, 'store'])->name('appointments.store');
    Route::put('/appointments/{appointment}', [App\Http\Controllers\ScheduleAppointmentController::class, 'update'])->name('appointments.update');
    Route::delete('/appointments/{appointment}', [App\Http\Controllers\ScheduleAppointmentController::class, 'destroy'])->name('appointments.destroy');
    
    // Email subscription routes
    Route::post('/email-sub', [App\Http\Controllers\EmailSubscriptionController::class, 'store'])->name('email-sub');
    Route::post('/email-subscriptions', [App\Http\Controllers\EmailSubscriptionController::class, 'store'])->name('email-subscriptions.store');
    Route::put('/email-subscriptions/{emailSubscription}', [App\Http\Controllers\EmailSubscriptionController::class, 'update'])->name('email-subscriptions.update');
    Route::delete('/email-subscriptions/{emailSubscription}', [App\Http\Controllers\EmailSubscriptionController::class, 'destroy'])->name('email-subscriptions.destroy');
});
