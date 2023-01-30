<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Carbon\Carbon;

class AlbumSongTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('album_song')->insert([
            'album_id' => 1,
            'song_id' => 1,
        ]);
        DB::table('album_song')->insert([
            'album_id' => 1,
            'song_id' => 2,
        ]);
        DB::table('album_song')->insert([
            'album_id' => 1,
            'song_id' => 3,
        ]);
        DB::table('album_song')->insert([
            'album_id' => 2,
            'song_id' => 4,
        ]);
        DB::table('album_song')->insert([
            'album_id' => 2,
            'song_id' => 5,
        ]);
        DB::table('album_song')->insert([
            'album_id' => 2,
            'song_id' => 6,
        ]);
        DB::table('album_song')->insert([
            'album_id' => 2,
            'song_id' => 7,
        ]);
        DB::table('album_song')->insert([
            'album_id' => 2,
            'song_id' => 8,
        ]);
        DB::table('album_song')->insert([
            'album_id' => 2,
            'song_id' => 9,
        ]);
        DB::table('album_song')->insert([
            'album_id' => 3,
            'song_id' => 15,
        ]);
        DB::table('album_song')->insert([
            'album_id' => 3,
            'song_id' => 16,
        ]);
        DB::table('album_song')->insert([
            'album_id' => 4,
            'song_id' => 10,
        ]);
        DB::table('album_song')->insert([
            'album_id' => 4,
            'song_id' => 11,
        ]);
    }
}
