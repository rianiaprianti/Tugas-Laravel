<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Author;
use Illuminate\Http\Request;

class KatalogController extends Controller
{
    public function index()
    {
        // Mengambil data dari database menggunakan Eloquent
        $books = Book::with('author')->get();
        $authors = Author::all();
        
        // Data array statis untuk Genre (Tugas 1)
        $genres = [
            ['id' => 1, 'nama' => 'Fiksi'],
            ['id' => 2, 'nama' => 'Horor'],
            ['id' => 3, 'nama' => 'Romansa'],
            ['id' => 4, 'nama' => 'Petualangan'],
            ['id' => 5, 'nama' => 'Sci-Fi'],
        ];

        return view('katalog', compact('books', 'authors', 'genres'));
    }
}