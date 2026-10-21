<?php

use App\Http\Controllers\BeritaController;
use Illuminate\Support\Facades\Route;
use App\Models\Berita;

Route::get('/', function () {
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


Route::get('/berita', [BeritaController::class, 'tampilberita']);
/// routing untuk handling 1 berita
Route::get('berita/{slug}', [BeritaController::class, 'tampilberitatunggal']);

Route::get('/kontak', function () {
    return view('kontak', [
        "title" => "kontak",
        "IG" => "izmap_",
        "Whatsaap" => "082339726293",
        "TikTok" => "izmaaap"
    ]);
});