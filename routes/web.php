<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KatalogController;

Route::get('/katalog', [KatalogController::class, 'index']);
