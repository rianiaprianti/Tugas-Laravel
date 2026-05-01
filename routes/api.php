<?php

use Illuminate\Support\Facades\Route;
use App\Models\Genre;
use App\Models\Author;
use App\Http\Controllers\AuthorController;
use App\Http\Controllers\BookController;

Route::get('/katalog', function () {
    return response()->json([
        'genres' => Genre::getData(),
        'authors' => Author::all(),
        'books' => \App\Models\Book::with('author')->get(),
    ]);
});

Route::get('/genres', function () {
    return response()->json(['data' => Genre::getData()]);
});

Route::get('/authors', [AuthorController::class, 'index']);
Route::get('/books', [BookController::class, 'index']);
