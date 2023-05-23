<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use HasFactory;

    protected $reviews = [
        [
            'no'=> 1,
            'film' => 'Train To Busan',
            'user' => 'Yeon Sang-Ho',
            'rating' => 8.9,
            'review' => 'Although the movie is Korean and English watchers need subs, this movie is absolutely 100000000% worth it. The movie quickly catches watchers attention and has you on the edge of your scene once the action start and keeps you there.',
            'tanggal' => '07-16',
        ],
        [
            'no'=> 2,
            'film' => 2012,
            'user' => 'Roland Emmerich',
            'rating' => 8.2,
            'review' => 'A two plus hour of chaos, and cheesy entertainment. I loved it, highly recommend you to watch. I personally enjoyed that one scene where those giraffes were airlifted into the ark.',
            'tanggal' => '13-11-09',
        ],
        [
            'no'=> 3,
            'film' => 'Miracle In Cell',
            'user' => 'Hanung Bramantyo',
            'rating' => 7.9,
            'review' => 'Film nya seru banget asli. tapi ga rekomen yang udah ga punya ayah ya, bercanda recomend kokk',
            'tanggal' => '09-08-22',
        ],
    ];

    public function getALLReviews()
    {
        return $this->reviews;
    }
}
