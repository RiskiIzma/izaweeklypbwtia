<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/', function () {
    return view('profile');
});

Route::get('/', function () {
    return view('kontak');
});

Route::get('/', function () {
    return view('berita');
});
