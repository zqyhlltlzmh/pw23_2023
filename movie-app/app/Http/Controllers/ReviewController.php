<?php

namespace App\Http\Controllers;


use App\Models\Review;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ReviewController extends Controller
{
    public function index() 
    {
        $reviews = Review::all();

        return view('reviews.index',compact('reviews'));
    }
}
