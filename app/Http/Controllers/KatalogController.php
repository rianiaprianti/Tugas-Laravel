<?php

namespace App\Http\Controllers;

use App\Models\Genre;
use App\Models\Author;
use Illuminate\Http\Request;

class KatalogController extends Controller
{
    public function index()
{
    // Panggil menggunakan nama fungsi yang baru
    $genres = Genre::getData(); 
    $authors = Author::getData();

    return view('katalog', compact('genres', 'authors'));
}
}
