<?php

use Illuminate\Support\Facades\Route;
use App\Models\berita;

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



Route::get('/berita', function () {
    
 return view('berita', [
        "title" => "berita",
        "beritas" => berita::all(),
    ]);
});

/// routing untuk handling 1 berita
Route::get('berita/{slug}', function($slug) {

    $data_berita = [
        [
            "judul" => "MBG Mas Burhan Gunawan",
            "slug" => "mbg-Mas-Burhan-Gunawan",
            "penulis" => "Burhan",
            "konten" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Soluta illum animi possimus quia laboriosam nisi minima ullam rem impedit sunt dolore ipsum, atque, consequatur 
                        consectetur ducimus molestias molestiae enim amet, minus cumque iusto! Temporibus illum tempora debitis! Veniam fuga consequatur voluptas unde exercitationem 
                        doloribus suscipit molestiae deleniti! Placeat commodi voluptatem, tempora hic repellendus repudiandae a quas nihil nemo sint tempore,
                        officia libero nam. Unde eligendi iusto officiis modi hic perferendis sit, laudantium minus possimus sequi quasi consequatur libero 
                        dolores dignissimos esse molestias ad quae vitae incidunt et quisquam aspernatur. Nulla, alias iure. Maxime nostrum, vitae mollitia enim omnis, eos provident asperiores doloribus voluptatibus at, 
                        blanditiis facere! Obcaecati, error explicabo. Odio, perferendis consequuntur. Quidem, doloremque quo eveniet ratione omnis fuga porro inventore sunt 
                        facilis et in nam, at quisquam asperiores aliquid sit minus accusantium aperiam iure repudiandae.
                        Expedita officiis recusandae voluptas cum modi doloribus totam molestias, laborum velit corrupti?"
        ],
        [
            "judul" => "Indonesia Juara ASEAN",
            "slug" => "Indosensia=Juara=AEAN",
            "penulis" => "Amin",
            "konten" => "Timnas Indonesia berhasil mencetak sejarah dengan menjadi 
            juara perdana FIFA ASEAN Cup 2026 setelah menaklukkan Thailand lewat drama adu penalti
            pada Senin malam, 5 Oktober 2026, di Stadion Utama Gelora Bung Karno (SUGBK), Jakarta. 
            Kemenangan ini sekaligus mengakhiri penantian panjang 35 tahun Indonesia untuk meraih trofi
            di level Asia Tenggara sejak terakhir kali memenangkan SEA Games pada tahun 
            1991"
        ]
    ];

    $singelnews = [];
    foreach ($data_berita as $berita) 
        {
            if($berita["slug"] == $slug)
                {
                    $singelnews = $berita;
                }
         }

    $berita = collect($data_berita)->firstWhere('slug', $slug);

    return view('beritatunggal', [
        "title" => "judul berita tunggal",
        "singelnews" => $singelnews
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