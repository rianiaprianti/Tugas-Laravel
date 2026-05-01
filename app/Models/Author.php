<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    public static function getData()
    {
        return [
            ['id' => 1, 'nama' => 'Tere Liye'],
            ['id' => 2, 'nama' => 'Dee Lestari'],
            ['id' => 3, 'nama' => 'Andrea Hirata'],
            ['id' => 4, 'nama' => 'Pramoedya Ananta Toer'],
            ['id' => 5, 'nama' => 'Sapardi Djoko Damono'],
        ];
    }
}
