<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Artisan;

Route::view('/', 'welcome');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

require __DIR__.'/auth.php';


Route::get('storage-link', function () {
    Artisan::call('storage:link');
    return 'success';
});

Route::get('migrate', function () {
    Artisan::call('migrate');
    return 'success';
});

Route::get('web-down', function () {
    Artisan::call('down');
    return 'success';
});

Route::get('web-up', function () {
    Artisan::call('up');
    return 'success';
});