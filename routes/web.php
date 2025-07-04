<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('users/login', function () {
    return view('users/login');
})->name('login');

Route::get('users/create', function () {
    return view('users/create');
})->name('createuser');

Route::post('users/login', [UserController::class, 'authenticate'])->name('users.authenticate');

Route::post('users/create', [UserController::class, 'store'])->name('users.store');

Route::get('users/index', function() {
    return view('users/index');
})->name('profile');

Route::get('users/verify', function() {
    return view('users/verify');
})->name('verify');