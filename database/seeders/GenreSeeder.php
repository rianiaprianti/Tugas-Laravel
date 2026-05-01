<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GenreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $genres = ['Fiksi', 'Horor', 'Romansa', 'Petualangan', 'Sci-Fi'];
        foreach ($genres as $nama) {
            \App\Models\Genre::create(['nama' => $nama]);
        }
    }
}
