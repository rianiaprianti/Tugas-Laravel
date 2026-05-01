<?php

namespace App\Http\Controllers;

use App\Models\Genre;
use Illuminate\Http\Request;

class GenreController extends Controller
{
    public function index()
    {
        return response()->json(['data' => Genre::getData()]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
        ]);

        $genre = Genre::create([
            'nama' => $request->nama,
        ]);

        return response()->json(['data' => $genre], 201);
    }
}
