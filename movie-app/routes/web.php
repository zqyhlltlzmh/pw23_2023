<?php

use App\Http\Controllers\MovieController;
use App\Http\Controllers\GenreController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ReviewController;
use Illuminate\Support\Facades\Route;


Route::get('/', [HomeController::class, 'index']);

Route::get('/movies', [MovieController::class, 'index']);
Route::get('/movies/create', [MovieController::class, 'create']);
Route::post('/movies', [MovieController::class, 'store']);
Route::delete('/movies/{movie}', [MovieController::class, 'destroy']);
Route::get('/movies/{movie}/edit', [MovieController::class, 'edit']);
Route::put('/movies/{movies}', [MovieController::class, 'update']);

Route::get('/genres', [GenreController::class, 'index']);
Route::get('/reviews', [ReviewController::class, 'index']);

Route::get('/genres/create', [GenreController::class, 'create']);
Route::post('/genres', [GenreController::class, 'store']);
Route::delete('/genres/{genre}', [GenreController::class, 'destroy']);

Route::get('/reviews/create', [ReviewController::class, 'create']);
Route::post('/reviews', [ReviewController::class, 'store']);
Route::delete('/reviews/{review}', [ReviewController::class, 'destroy']);


Route::get('/users', function() {
    return view('users/index');
});