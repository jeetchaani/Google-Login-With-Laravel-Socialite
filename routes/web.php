<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\UserLoginController;


Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Route::get('/login',[UserLoginController::class,'redirectToGoogle'])->name('google');

Route::get('/callback',[UserLoginController::class,'handleGoogleCallback']);