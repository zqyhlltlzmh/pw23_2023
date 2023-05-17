<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    use HasFactory;

    protected $movies = [
        [
            'no' =>1,
            'judul' => 'The Shawshank Redemption',
            'poster' => 'image.png',
            'genre' => 'Drama',
            'negara' => 'USA',
            'tahun' => 1994,
            'rating' => 9.8,
        ],
        [
            'no' => 2,
            'judul' => 'Duty After School',
            'poster' => 'image.png',
            'genre' => 'Drama',
            'negara' => 'Korea',
            'tahun' => 2023,
            'rating' => 3.3,
        ],
        [
            'no' => 3,
            'judul' => 'Doctor Cha',
            'poster' => 'image.png',
            'genre' => 'Drama',
            'negara' => 'Korea',
            'tahun' => 2023,
            'rating' => 9.9,
        ],
        [
            'no' => 4,
            'judul' => 'Taxi Driver',
            'poster' => 'image.png',
            'genre' => 'Action',
            'negara' => 'Korea',
            'tahun' => 2023,
            'rating' => 9.9,
        ],
        [
            'no' => 5,
            'judul' => 'True Beauty',
            'poster' => 'image.png',
            'genre' => 'Drama',
            'negara' => 'Korea',
            'tahun' => 2020,
            'rating' => 9.9,
        ],
    ];

    public function getAllMovies()
    {
        return $this->movies;
    }

}
