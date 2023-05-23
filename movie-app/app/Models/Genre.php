<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Genre extends Model
{
    use HasFactory;

    protected $genres = [
        [
            'no' =>1,
            'genre' => 'Horor',
            'deskripsi' => 'Example'   
        ],
        [
            'no' =>2,
            'genre' => 'Drama',
            'deskripsi' => 'Example'   
        ],
        [
            'no' =>3,
            'genre' => 'Aksi',
            'deskripsi' => 'Example'   
        ],
        [
            'no' =>4,
            'genre' => 'Comedy',
            'deskripsi' => 'Example'   
        ],
        [
            'no' =>5,
            'genre' => 'Drama',
            'deskripsi' => 'Example'   
        ],

    ];

    public function getALLGenres()
    {
        return $this->genres;
    }
}
