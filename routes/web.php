<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormController;
use App\Http\Controllers\ViewController;
use App\Http\Controllers\ProfileController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/booking', function(){

    return view('customer/booking');    
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

/*vendor*/
foreach(['cake', 'outfit', 'venue', 'food'] as $type){
    Route::view($type, "vendor.$type")
    ->name("vendor.$type");
}

Route::controller(FormController::class)->group(function(){
    Route::post('cake', 'fillcake')->name('vendor.cake.submit');
    Route::post('outfits', 'filloutfit')->name('vendor.outfit.submit');
    Route::post('venues',  'fillvenue')->name('vendor.venue.submit');
    Route::post('food',    'fillfoodbeverages')->name('vendor.food.submit');
});

// -- View Vendor Options list -- //
Route::prefix('vendor')
     ->name('vendor.')
     ->controller(ViewController::class)
     ->group(function () {
         Route::get('cakeview',  'cakeview')->name('cakeview');
         Route::get('outfitview','outfitview')->name('outfitview');
         Route::get('venueview', 'venueview')->name('venueview');
         Route::get('foodview',  'foodview')->name('foodview');
         Route::get('vendororder','allvendorlistorder')->name('order');
     });

// -- Auth Protected User Pages -- //
    Route::middleware('auth')->group(function () {
    Route::view('dashboard', 'dashboard')->name('dashboard');
    Route::view('dashboardvendor', 'vendor.dashboardvendor')->name('dashboardvendor');

    Route::view('profile', 'profile')->name('profile');
    Route::put('profile', [ProfileController::class, 'update'])->name('profile.update');
});

Route::view('dashboardvendor', '/vendor/dashboardvendor')->name('dashboardvendor');


//customer 
Route::prefix('booking')
    ->name('booking.')
    ->controller(FormController::class)
    ->group(function() {
        Route::get('/', 'bookingselection');
        Route::post('/', 'booking');
});

// Customer
Route::prefix('customer')
     ->name('customer.')
     ->controller(ViewController::class)
     ->group(function() {
         
    // Sum of all options
    Route::get('cakes', 'totalCake')->name('totals.cakes');    
    Route::get('outfits', 'totalOutfit')->name('totals.outfits');
    Route::get('venues', 'totalVenue')->name('totals.venues'); 
    Route::get('foods', 'totalFood')->name('totals.foods');

    // Customer booking list
    Route::get('bookingview', 'bookingview');
    Route::get('delete/{booking}','delete');
});