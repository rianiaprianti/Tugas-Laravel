<?php

use Illuminate\Support\Facades\Route;
use App\Models\Genre;
use App\Models\Author;
use App\Http\Controllers\AuthorController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\GenreController;

Route::get('/katalog', function () {
    return response()->json([
        'genres' => Genre::all(),
        'authors' => Author::all(),
        'books' => \App\Models\Book::with('author')->get(),
    ]);
});

Route::apiResource('genres', GenreController::class);
Route::apiResource('authors', AuthorController::class);
Route::get('/books', [BookController::class, 'index']);
