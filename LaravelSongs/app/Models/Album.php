<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Album extends Model
{
    use HasFactory;

    public function band()
    {
        return $this->belongsTo(Band::class);
    }

    public function songs()
    {
        return $this->belongsToMany(Song::class);
    }

    protected $fillable = [
        'band_id',
        'name',
        'year',
        'times_sold',
    ];
}
