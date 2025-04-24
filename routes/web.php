<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InstantQuoteController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\ServicesController;

Route::get('/', function () {
    return view('welcome');
});

//Route::get('our_services', [ServicesController::class, 'servicesPage'])->name('our_services.index');
Route::get('drainage-services', [ServicesController::class, 'drainageServicesPage'])->name('drainage-services.index');
Route::get('plumbing-installations', [ServicesController::class, 'plumbingInstallationsPage'])->name('plumbing-installations.index');
Route::get('plumbing-maintenances', [ServicesController::class, 'plumbingMaintenancesPage'])->name('plumbing-maintenances.index');
//Route::get('our_services', [InstantQuoteController::class, 'getInstantQuote'])->name('our_services.index');
//Route::get('our_services', [ServicesController::class, 'servicesPage'])->name('our_services.index');
