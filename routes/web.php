<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PagesController;


// Home Routes
Route::get('/', [HomeController::class, 'index'])
    ->name('index');
Route::get('/index-one-page', [HomeController::class, 'index_one_page'])
    ->name('index-one-page');
Route::get('/index2', [HomeController::class, 'index2'])
    ->name('index2');
Route::get('/index2-one-page', [HomeController::class, 'index2_one_page'])
    ->name('index2-one-page');
Route::get('/index3', [HomeController::class, 'index3'])
    ->name('index3');
Route::get('/index3-one-page', [HomeController::class, 'index3_one_page'])
    ->name('index3-one-page');


// Pages Routes about
Route::get('/about', [PagesController::class, 'about'])
    ->name('about');


// Pages Routes 
Route::get('/team', [PagesController::class, 'team'])
    ->name('team');
Route::get('/team-carousel', [PagesController::class, 'team_carousel'])
    ->name('team-carousel');
Route::get('/team-details', [PagesController::class, 'team_details'])
    ->name('team-details');
Route::get('/portfolio', [PagesController::class, 'portfolio'])
    ->name('portfolio');
Route::get('/portfolio-details', [PagesController::class, 'portfolio_details'])
    ->name('portfolio-details');
Route::get('/testimonials', [PagesController::class, 'testimonials'])
    ->name('testimonials');
Route::get('/testimonials-carousel', [PagesController::class, 'testimonials_carousel'])
    ->name('testimonials-carousel');
Route::get('/pricing', [PagesController::class, 'pricing'])
    ->name('pricing');
Route::get('/gallery', [PagesController::class, 'gallery'])
    ->name('gallery');
Route::get('/faq', [PagesController::class, 'faq'])
    ->name('faq');
Route::get('/404', [PagesController::class, 'notfound'])
    ->name('404');
Route::get('/coming-soon', [PagesController::class, 'coming_soon'])
    ->name('coming-soon');


// Services Routes
Route::get('/services', [PagesController::class, 'services'])
    ->name('services');
Route::get('/services-carousel', [PagesController::class, 'services_carousel'])
    ->name('services-carousel');
Route::get('/threat-detection-prevention', [PagesController::class, 'threat_detection_prevention'])
    ->name('threat-detection-prevention');
Route::get('/endpoint-device-security', [PagesController::class, 'endpoint_device_security'])
    ->name('endpoint-device-security');
Route::get('/data-protection-privacy', [PagesController::class, 'data_protection_privacy'])
    ->name('data-protection-privacy');
Route::get('/backup-recovery', [PagesController::class, 'backup_recovery'])
    ->name('backup-recovery');
Route::get('/advanced-technology', [PagesController::class, 'advanced_technology'])
    ->name('advanced-technology');
Route::get('/cloud-managed-services', [PagesController::class, 'cloud_managed_services'])
    ->name('cloud-managed-services');


// Products Routes
Route::get('/products', [PagesController::class, 'products'])
    ->name('products');
Route::get('/product-details', [PagesController::class, 'product_details'])
    ->name('product-details');
Route::get('/cart', [PagesController::class, 'cart'])
    ->name('cart');
Route::get('/checkout', [PagesController::class, 'checkout'])
    ->name('checkout');
Route::get('/wishlist', [PagesController::class, 'wishlist'])
    ->name('wishlist');
Route::get('/sign-up', [PagesController::class, 'sign_up'])
    ->name('sign-up');
Route::get('/login', [PagesController::class, 'login'])
    ->name('login');

// Blog Routes
Route::get('/blog', [PagesController::class, 'blog'])
    ->name('blog');
Route::get('/blog-carousel', [PagesController::class, 'blog_carousel'])
    ->name('blog-carousel');
Route::get('/blog-list', [PagesController::class, 'blog_list'])
    ->name('blog-list');
Route::get('/blog-list-2', [PagesController::class, 'blog_list_2'])
    ->name('blog-list-2');
Route::get('/blog-details', [PagesController::class, 'blog_details'])
    ->name('blog-details');


// Contact Routes
Route::get('/contact', [PagesController::class, 'contact'])
    ->name('contact');

Route::fallback(function () {
    return view('pages.404');
})->name('fallback');
