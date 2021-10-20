<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PropertyController;
use App\Http\Controllers\EmailController;
use App\Http\Controllers\MailController;
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

Route::group(['middleware' => 'auth'], function(){
    Route::get('/dashboard', function () {
        return view('dashboard.index');
    })->name('dashboard');
    
    Route::get('/profile', [UserController::class, 'index']);

    Route::post('/profile_update/{id}', [UserController::class, 'update']); 
    Route::post('/upload_images', [PropertyController::class, 'multipleImages']); 
    Route::get('/start-post-property', [PropertyController::class, 'index']);

    Route::get('/property_type', [PropertyController::class, 'fetchPropertyType']);
    Route::get('/fetchListingProperty/{id}', [PropertyController::class, 'fetchListingProperty']);

    Route::get('/fetchListingCities/{state_id}', [PropertyController::class, 'fetchListingCity']);
    Route::post('/store-property', [PropertyController::class, 'store']); 
    // Route::get('/email-send', [EmailController::class, 'sendOtpViaEmail']); 
    Route::get('/send-email', [MailController::class, 'sendEmail']);

});

require __DIR__.'/auth.php';
