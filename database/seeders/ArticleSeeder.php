<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Illuminate\Support\Str;
use App\Models\Article;
use Faker\Factory as Faker;

class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        for ($i = 0; $i < 10; $i++) { // Menghasilkan 10 data dummy
            Article::insert([
                'title' => $faker->sentence(6, true), // Judul artikel dengan 6 kata
                'uuid' => $faker->uuid(), // UUID unik
                'author' => $faker->name(), // Nama penulis
                'publish_date' => $faker->date(), // Tanggal publikasi
                'images' => $faker->imageUrl(640, 480, 'articles', true, 'Faker'), // URL gambar acak
                'content' => $faker->paragraphs(3, true), // 3 paragraf isi artikel
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
