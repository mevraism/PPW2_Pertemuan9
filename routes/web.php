<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginRegisterController;

Route::get('/', function () {
    return view('welcome');
})->name("welcome");

Route::middleware('guest')->group(function () {
    Route::get('/login', [LoginRegisterController::class, 'login'])->name('login');;
    Route::get('/register', [LoginRegisterController::class, 'register'])->name('register');
    Route::post('/store', [LoginRegisterController::class, 'store'])->name('store');
    Route::post('/authenticate', [LoginRegisterController::class, 'authenticate'])->name('authenticate');
});

// routes/web.php
Route::middleware(['auth'])->group(function() {
    Route::get('/dashboard', [LoginRegisterController::class, 'dashboard'])->name('dashboard');
    Route::get('/logout', [LoginRegisterController::class, 'logout']);
    Route::post('/logout', [LoginRegisterController::class, 'logout'])->name('logout');
    
    // Route dengan middleware admin
    Route::middleware(['isAdmin'])->group(function() {
        Route::get('/dashboard/adminpage', [LoginRegisterController::class, 'adminpage'])->name('adminpage');
    });
});
Route::get('restricted', function () {
    return "Anda berusia lebih dari 18 tahun!"; })->middleware('checkage');