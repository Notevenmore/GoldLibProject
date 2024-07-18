<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Authorization;
use App\Http\Controllers\BookController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\PeminjamanController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [BookController::class, 'index'])->name('home')->middleware('auth');

Route::get('/description/{id}', [BookController::class, 'show'])->name('description')->middleware('auth');

Route::get('/review/{id}', [ReviewController::class, 'show'])->name('review')->middleware('auth');
Route::post('/review/{id}/send', [ReviewController::class, 'store'])->name('send-comment')->middleware('auth');

Route::get('/cart', [CartController::class, 'index'])->name('show-cart')->middleware('auth');
Route::post('/cart/payment', [CartController::class, 'show'])->name('payment-details')->middleware('auth');
Route::post('/cart', [CartController::class, 'store'])->name('add-cart');

Route::resource('profile', UserController::class)->middleware('auth');

Route::resource('countdown', PeminjamanController::class)->middleware('auth');

Route::get('/register', [Authorization::class, 'register'])->name('register')->middleware('guest');
Route::get('/login', [Authorization::class, 'login'])->name('login')->middleware('guest');
Route::post('/login', [Authorization::class, 'checkauthorize'])->name('authorize')->middleware('guest');
Route::post('/register', [Authorization::class, 'addUserData'])->name('do-register')->middleware('guest');
Route::get('/logout', [Authorization::class, 'logout'])->name('logout')->middleware('auth');
