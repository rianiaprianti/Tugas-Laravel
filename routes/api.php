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

// Public routes (Read only - no authentication required)
Route::get('/genres', [GenreController::class, 'index']);
Route::get('/genres/{genre}', [GenreController::class, 'show']);
Route::get('/authors', [AuthorController::class, 'index']);
Route::get('/authors/{author}', [AuthorController::class, 'show']);

// Admin protected routes (Create, Update, Destroy)
Route::middleware('admin')->group(function () {
    Route::post('/genres', [GenreController::class, 'store']);
    Route::put('/genres/{genre}', [GenreController::class, 'update']);
    Route::delete('/genres/{genre}', [GenreController::class, 'destroy']);

    Route::post('/authors', [AuthorController::class, 'store']);
    Route::put('/authors/{author}', [AuthorController::class, 'update']);
    Route::delete('/authors/{author}', [AuthorController::class, 'destroy']);
});

Route::get('/books', [BookController::class, 'index']);
