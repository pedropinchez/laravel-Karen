<?php

use Illuminate\Support\Facades\Route;

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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/order', [App\Http\Controllers\HomeController::class, 'orders'])->name('order');
Route::get('/members', [App\Http\Controllers\HomeController::class, 'members'])->name('members');
Route::get('/bookings', [App\Http\Controllers\HomeController::class, 'bookings'])->name('bookings');
Route::get('/sports', [App\Http\Controllers\HomeController::class, 'sports'])->name('sports');



