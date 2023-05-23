<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Genre;

class GenreController extends Controller {
    public function index() 
    {
        $genre = new Genre;
        $genres = $genre->getAllGenres();

        return view("genres.index", ["genres" => $genres]);
    }
}
