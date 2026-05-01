<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AuthorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
{
    $authors = ['Tere Liye', 'Dee Lestari', 'Andrea Hirata', 'Pramoedya Ananta Toer', 'Sapardi Djoko Damono'];
    foreach ($authors as $name) {
        \App\Models\Author::create(['name' => $name]);
    }
}
}
