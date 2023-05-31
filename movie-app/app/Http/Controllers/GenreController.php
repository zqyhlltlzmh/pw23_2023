<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Genre;

class GenreController extends Controller {
    public function index() 
    {
        $genres = Genre::all();

        return view('genres.index',compact('genres'));
    }
}
