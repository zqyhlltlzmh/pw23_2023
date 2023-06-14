<?php

namespace App\Http\Controllers;


use App\Models\Review;
use App\Http\Controllers\Controller;
use App\Models\Genre;
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
        $genres = Genre::all();
        return view('reviews.create', compact('genres'));
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

    public function edit(Review $review)
    {
        $genres = Genre::all();
        return view('reviews.edit', compact('review', 'genres'));
    }

    public function update(Request $request, Review $review)
    {
        $validateData = $request->validate([
            'film' => 'required',
            'user' => 'required',
            'rating' => 'required|numeric',
            'review' => 'required',
            'tanggal' => 'required|date',
        ]);

        $review->update($validateData);
        return redirect('/reviews')->with('success', 'Data berhasil di Update!');
    }

    public function destroy(Review $review)
    {
        $review->delete();

        return redirect('/reviews')->with('succes', 'review deleted successfully');
    }
}
