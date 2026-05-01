<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Genre extends Model
{
    public static function getData()
    {
        return [
            ['id' => 1, 'nama' => 'Fiksi'],
            ['id' => 2, 'nama' => 'Horor'],
            ['id' => 3, 'nama' => 'Romansa'],
            ['id' => 4, 'nama' => 'Petualangan'],
            ['id' => 5, 'nama' => 'Sci-Fi'],
        ];
    }
}
