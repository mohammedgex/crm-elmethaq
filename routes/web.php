<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
// Route::get('/workers', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/workers', function () {
    return view('workers'); // This loads resources/views/dashboard.blade.php
})->name('workers');

Route::get('/users', function () {
    return view('users'); // This loads resources/views/dashboard.blade.php
})->name('users');

// MRZ extractor
Route::get('/mrz-passprt-extractor', function () {
    return view('mrz-extractor'); // This loads resources/views/dashboard.blade.php
})->name('mrz-passprt-extractor');

Route::get('/worker-create', function () {
    return view('user-create'); // This loads resources/views/dashboard.blade.php
})->name('worker-create');

Route::get('/Delegates-create', function () {
    return view(view: 'Delegates'); // This loads resources/views/dashboard.blade.php
})->name(name: 'Delegates-create');