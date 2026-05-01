<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
{
    \App\Models\Book::create(['title' => 'Hujan', 'author_id' => 1, 'year' => 2016]);
    \App\Models\Book::create(['title' => 'Perahu Kertas', 'author_id' => 2, 'year' => 2009]);
    \App\Models\Book::create(['title' => 'Laskar Pelangi', 'author_id' => 3, 'year' => 2005]);
    \App\Models\Book::create(['title' => 'Bumi Manusia', 'author_id' => 4, 'year' => 1980]);
    \App\Models\Book::create(['title' => 'Hujan Bulan Juni', 'author_id' => 5, 'year' => 1994]);
}
}
