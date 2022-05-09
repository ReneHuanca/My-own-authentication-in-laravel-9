<?php

use App\Http\Controllers\Auth\LoginController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::view('/', 'welcome');
Route::view('/login', 'login')->name('login')->middleware('guest');
Route::view('/dashboard', 'dashboard')->middleware('auth');
Route::post('/login', [LoginController::class, 'login']);
Route::post('/logout', [LoginController::class, 'logout']);


