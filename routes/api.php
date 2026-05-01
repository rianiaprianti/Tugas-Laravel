<?php

use Illuminate\Support\Facades\Route;
use App\Models\Genre;
use App\Models\Author;
use App\Http\Controllers\AuthorController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\GenreController;

Route::get('/katalog', function () {
    return response()->json([
        'genres' => Genre::getData(),
        'authors' => Author::all(),
        'books' => \App\Models\Book::with('author')->get(),
    ]);
});

Route::get('/genres', [GenreController::class, 'index']);
Route::post('/genres', [GenreController::class, 'store']);

Route::get('/authors', [AuthorController::class, 'index']);
Route::post('/authors', [AuthorController::class, 'store']);

Route::get('/books', [BookController::class, 'index']);
