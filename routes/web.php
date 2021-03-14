<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PhoneController;

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

// Route::resource('/', UserController::class);



// Route::resource('/', UserController::class)->names([
//     'index' => 'users',
    // 'store' => '',
    // 'create' => 'photos.build',
    // 'show' => 'phones',
    // 'update' => 'photos.build',
    // 'destroy' => 'photos.build',
    // 'edit' => 'photos.build',
// ]);

Route::get( '/', [UserController::class, 'users'])->name('users');
Route::get( '/phone', [PhoneController::class, 'phone'])->name('phone');
Route::get( '/info/{id}', [UserController::class, 'info'])->name('info');
// Route::post($uri, $callback);
// Route::put($uri, $callback);
// Route::patch($uri, $callback);
// Route::delete($uri, $callback);
// Route::options($uri, $callback);


