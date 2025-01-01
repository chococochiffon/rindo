<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminLoginController;

//Route::get('/', function () {
//    return view('welcome');
//});
//
//Auth::routes();
//
//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/', function () {
    return view('welcome');
});
Route::prefix('admin')->name('admin.')->group(function () {
    Route::middleware('guest:admin')->group(function() {
        Route::get('/login', [AdminLoginController::class, 'login'])->name('login');
        Route::post('/login', [AdminLoginController::class, 'doLogin'])->name('doLogin');
        Route::delete('/login', [AdminLoginController::class, 'logout'])->name('logout');
    });
    Route::middleware('auth:admin')->group(function() {
        Route::get('/index', function () {
            return view('admin.index');
        })->name('admin.index');
    });
});
