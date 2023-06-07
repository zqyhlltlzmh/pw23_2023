<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Genre;
use SebastianBergmann\CodeUnit\FunctionUnit;

class GenreController extends Controller {
    public function index() 
    {
        $genres = Genre::all();

        return view('genres.index',compact('genres'));
    }

    public function create()
    {
        $genres = Genre::all();
        return view('genres.create', compact('genres'));
    }

    public function store(Request $request)
    {
        $validateData = $request->validate([
            'nama' => 'required',
            'deskripsi' => 'required',
            
        ]);

        genre::create($validateData);
        
        return redirect('/genres')->with('success', 'Genre added successfully');
    }
    public function destroy(Genre $genre)
    {
        $genre->delete();

        return redirect('/genres')->with('succes', 'Movie deleted successfully');
    }

}
