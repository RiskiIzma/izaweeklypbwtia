<?php

namespace Database\Factories;

use App\Models\Berita;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends Factory<Berita>
 */
class BeritaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $faker = \Faker\Factory::create('id_ID'); // Menggunakan locale Indonesia
        $fakerID = \Faker\Factory::create('en_US'); // Menggunakan locale Indonesia
        
        $title = $fakerID->sentence(mt_rand(5, 12));


        return [
            'judul' => $title,
            'slug' => Str::slug($title),
            'penulis' => $fakerID->name(),
            'konten' => $fakerID->paragraph(mt_rand(3, 6)),
        ];
    }
}
