<?php

namespace Database\Seeders;

use App\Models\Review;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ReviewsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Review::create([
            'film' => 'Train To Busan',
            'user' => 'Yeon Sang-Ho',
            'rating' => '8.9',
            'review' => 'Although the movie is Korean and English watchers need subs, this movie is absolutely 100000000% worth it. The movie quickly catches watchers attention and has you on the edge of your scene once the action start and keeps you there.',
            'tanggal' => '2016-07-07',
        ]);
        
        Review::create([
            'film' => 'Miracle',
            'user' => 'hanung branmantyo',
            'rating' => '7.9',
            'review' => 'Film nya seru banget asli. tapi ga rekomen yang udah ga punya ayah ya, bercanda recomend kokk',
            'tanggal' => '2022-08-09',
        ]);

    }
}
