<?php

use App\Http\Controllers\MovieController;
use App\Http\Controllers\GenreController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ReviewController;
use App\Models\Genre;
use App\Models\Review;
use Illuminate\Support\Facades\Route;


Route::get('/', [HomeController::class, 'index']);

Route::resource('/movies', MovieController::class);
Route::resource('/genres', GenreController::class);
Route::resource('/reviews', ReviewController::class);



Route::get('/users', function() {
    return view('users/index');
});