<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/login', [App\Http\Controllers\AuthController::class, 'loginShow'])->name('login');
Route::post('/login', [App\Http\Controllers\AuthController::class, 'loginAction']);

Route::get('/register', [App\Http\Controllers\AuthController::class, 'register'])->name('register');
Route::post('/register', [App\Http\Controllers\AuthController::class, 'registerAction']);

Route::middleware(['auth'])->group(function () {
    // Routes accessible only to authenticated users
    Route::get('/logout', [App\Http\Controllers\AuthController::class, 'logout'])->name('logout');
    Route::get('/dashboard', [App\Http\Controllers\DashboardController::class, 'dashboard'])->name('dashboard');
    Route::get('/chat', [App\Http\Controllers\ChatController::class, 'chatShow'])->name('chat');
});