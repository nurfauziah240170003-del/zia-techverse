<?php

namespace Database\Seeders;

use App\Models\Article;
use App\Models\Category;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Membuat akun admin
        $user = User::create([
            'name' => 'Nurfauziah',
            'email' => 'admin@ziatechverse.com',
            'password' => bcrypt('password'),
        ]);

        // Membuat kategori
        $teknologi = Category::create([
            'name' => 'Teknologi',
        ]);

        $pendidikan = Category::create([
            'name' => 'Pendidikan',
        ]);

        $bisnis = Category::create([
            'name' => 'Bisnis',
        ]);

        // Membuat artikel
        Article::create([
            'user_id' => $user->id,
            'category_id' => $teknologi->id,
            'title' => 'Perkembangan Artificial Intelligence di Tahun 2026',
            'slug' => 'perkembangan-artificial-intelligence-di-tahun-2026',
            'content' => 'Artificial Intelligence terus berkembang dan digunakan dalam berbagai bidang seperti pendidikan, kesehatan, dan industri digital.',
            'status' => 'published',
        ]);

        Article::create([
            'user_id' => $user->id,
            'category_id' => $pendidikan->id,
            'title' => 'Pentingnya Pendidikan di Era Digital',
            'slug' => 'pentingnya-pendidikan-di-era-digital',
            'content' => 'Pendidikan berbasis teknologi membantu mahasiswa mengakses informasi dengan lebih cepat dan efektif.',
            'status' => 'published',
        ]);

        Article::create([
            'user_id' => $user->id,
            'category_id' => $bisnis->id,
            'title' => 'Peluang Bisnis di Era Teknologi',
            'slug' => 'peluang-bisnis-di-era-teknologi',
            'content' => 'Perkembangan teknologi membuka berbagai peluang bisnis digital yang menjanjikan.',
            'status' => 'published',
        ]);
    }
}