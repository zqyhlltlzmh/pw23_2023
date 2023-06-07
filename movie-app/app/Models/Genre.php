<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Genre extends Model
{
    use HasFactory;

    protected $fillable = ['nama', 'deskripsi'];

    public function genre()
    {
        return $this->belongsTo(Genre::class, 'nama');
    }
}
