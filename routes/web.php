<?php

use App\Http\Controllers\AccountSettings;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\SignController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::controller(LoginController::class)->group(function () {
    Route::get('/login', 'index')->name('login.index');
    Route::post('/login', 'store')->name('login.store');
    Route::get('/logout', 'destroy')->name('login.destroy');
});

Route::controller(SignController::class)->group(function () {
    Route::get('/sign', 'index')->name('sign.index');
    Route::post('/sign', 'store')->name('sign.store');
});

Route::controller(AccountSettings::class)->group(function () {
    Route::get('/accountsettins', 'index')->name('account.index');
    Route::post('/accountsettins', 'index')->name('account.index');
});