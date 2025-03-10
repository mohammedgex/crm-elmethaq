<?php

use App\Http\Controllers\CustomerController;
use App\Http\Controllers\DelegateController;
use App\Models\Delegate;
use Illuminate\Support\Facades\Auth;
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


Route::get('/Delegates-create', [DelegateController::class, 'index'])->name(name: 'Delegates.create');
Route::delete('/Delegates-delete/{id}', [DelegateController::class, 'delete'])->name('Delegates.delete');

Route::post('/delegates', action: [DelegateController::class, 'store'])->name('delegates.store');

Route::get('/worker-create', [CustomerController::class, 'index'])->name('customer.indes');

Route::post('/customer-add', [CustomerController::class, 'create'])->name(name: 'customer.create');
