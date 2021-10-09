<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PropertyController;
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
    Route::get('/start-post-property', [PropertyController::class, 'index']);
    
    Route::get('/fetchListingProperty/{id}', [PropertyController::class, 'fetchListingProperty']);

    Route::get('/fetchListingCities/{state_id}', [PropertyController::class, 'fetchListingCity']);
    Route::get('/property_type', [PropertyController::class, 'fetchPropertyType']);

});

require __DIR__.'/auth.php';
