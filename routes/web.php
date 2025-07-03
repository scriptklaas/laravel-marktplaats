<?php

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