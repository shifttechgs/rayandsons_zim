<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\QuoteController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\ServicesController;
use App\Mail\ContactFormMail;
use Illuminate\Support\Facades\Mail;


Route::get('/', function () {
    return view('welcome');
})->name('home');



Route::get('drainage-services', [ServicesController::class, 'drainageServicesPage'])->name('drainage-services.index');
Route::get('plumbing-installations', [ServicesController::class, 'plumbingInstallationsPage'])->name('plumbing-installations.index');
Route::get('plumbing-maintenances', [ServicesController::class, 'plumbingMaintenancesPage'])->name('plumbing-maintenances.index');
Route::get('about-us', [PagesController::class, 'aboutUsPage'])->name('about-us.index');
Route::get('our-works', [PagesController::class, 'worksPage'])->name('our-works.index');
Route::get('contact-us', [PagesController::class, 'contactUsPage'])->name('contact-us.index');
Route::post('/instantQuote', [QuoteController::class, 'getInstantQuote']);

//reboot
Route::get('reboot',function(){
    Artisan::call('view:clear');
    Artisan::call('route:clear');
    Artisan::call('config:clear');
    Artisan::call('cache:clear');
    Artisan::call('key:generate');
    dd('system rebooted!');
});

Route::get('/test-mail', function () {
    $data = [
        'firstname' => 'Test User',
        'email' => 'test@example.com',
        'phoneNumber' => '123456789',

        'service' => 'Delivery',
        'comment' => 'This is a test message.',
    ];

    Mail::to('info@shifttechgs.com')->send(new ContactFormMail($data));

    return 'Test email sent!';
});
