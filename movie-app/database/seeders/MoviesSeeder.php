<?php

namespace Database\Seeders;

use App\Models\Movie;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MoviesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Movie::create([
            'judul' => 'the shawshank redemption',
            'poster' => 'image.png',
            'genre_id' => 1,
            'negara' => 'USA',
            'tahun' => 1994,
            'rating' => 9.8,
        ]);
        
        Movie::create([
            'judul' => 'the shawshank redemption',
            'poster' => 'image.png',
            'genre_id' => '3',
            'negara' => 'USA',
            'tahun' => 1994,
            'rating' => 9.8,
        ]);

    }
}
