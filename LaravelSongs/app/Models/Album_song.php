<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Album_song extends Model
{
    use HasFactory;

    protected $table = 'album_song';
    protected $fillable = [
        'album_id',
        'song_id',
    ];
}
