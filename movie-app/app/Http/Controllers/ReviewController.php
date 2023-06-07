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

    public function create()
    {
        $reviews = Review::all();
        return view('reviews.create', compact('reviews'));
    }

    public function store(Request $request)
    {
        $validateData = $request->validate([
            'film' => 'required',
            'user' => 'required',
            'rating' => 'required|numeric',
            'review' => 'required',
            'tanggal' => 'required|date',
        ]);

        Review::create($validateData);
        
        return redirect('/reviews')->with('success', 'Review added successfully');
    }

    public function destroy(Review $review)
    {
        $review->delete();

        return redirect('/review')->with('succes', 'review deleted successfully');
    }
}
