<?php

use Illuminate\Support\Facades\Route;

Route::get('/home', function () {
    return view('home', [
        "title" => "Home",
    ]);
});

Route::get('/profile', function () {
    return view('profile', [
        "title" => "profile",
        "name" => "Riski Izma",
        "nim" => "13242520035",
        "prodi" => "Teknologi Informasi",
        "gambar" => "logo yunimus.png"
    ]);
});

Route::get('/kontak', function () {
    return view('kontak', [
        "title" => "kontak",
        "IG" => "izmap_",
        "Whatsaap" => "082339726293",
        "TikTok" => "izmaaap"
    ]);
});

Route::get('/berita', function () {
    return view('berita', [
        "title" => "berita",
    ]);
});
