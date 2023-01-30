<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Carbon\Carbon;

class SongsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('songs')->insert([
            'created_at' => carbon::now(),
            'updated_at' => carbon::now(),
            'title' => 'Dancing Queen',
            'singer' => 'ABBA',
        ]);
        DB::table('songs')->insert([
            'created_at' => carbon::now(),
            'updated_at' => carbon::now(),
            'title' => 'Mamma Mia',
            'singer' => 'ABBA',
        ]);
        DB::table('songs')->insert([
            'created_at' => carbon::now(),
            'updated_at' => carbon::now(),
            'title' => 'Gimme gimme gimme',
            'singer' => 'ABBA',
        ]);
        DB::table('songs')->insert([
            'created_at' => carbon::now(),
            'updated_at' => carbon::now(),
            'title' => 'Bohemian Rhapsody',
            'singer' => 'Queen',
        ]);
        DB::table('songs')->insert([
            'created_at' => carbon::now(),
            'updated_at' => carbon::now(),
            'title' => 'Radio Ga Ga',
            'singer' => 'Queen',
        ]);
        DB::table('songs')->insert([
            'created_at' => carbon::now(),
            'updated_at' => carbon::now(),
            'title' => 'We will rock you',
            'singer' => 'Queen',
        ]);
        DB::table('songs')->insert([
            'created_at' => carbon::now(),
            'updated_at' => carbon::now(),
            'title' => 'We are the champions',
            'singer' => 'Queen',
        ]);
        DB::table('songs')->insert([
            'created_at' => carbon::now(),
            'updated_at' => carbon::now(),
            'title' => 'Dont stop me now',
            'singer' => 'Queen',
        ]);
        DB::table('songs')->insert([
            'created_at' => carbon::now(),
            'updated_at' => carbon::now(),
            'title' => 'I want to break free',
            'singer' => 'Queen',
        ]);
        DB::table('songs')->insert([
            'created_at' => carbon::now(),
            'updated_at' => carbon::now(),
            'title' => 'Chop suey!',
            'singer' => 'System of a down',
        ]);
        DB::table('songs')->insert([
            'created_at' => carbon::now(),
            'updated_at' => carbon::now(),
            'title' => 'Toxicity',
            'singer' => 'System of a down',
        ]);
        DB::table('songs')->insert([
            'created_at' => carbon::now(),
            'updated_at' => carbon::now(),
            'title' => 'Stayin alive',
            'singer' => 'Bee Gees',
        ]);
        DB::table('songs')->insert([
            'created_at' => carbon::now(),
            'updated_at' => carbon::now(),
            'title' => 'Roller coaster',
            'singer' => 'Danny Vera',
        ]);
        DB::table('songs')->insert([
            'created_at' => carbon::now(),
            'updated_at' => carbon::now(),
            'title' => 'Make it a memory',
            'singer' => 'Danny Vera',
        ]);
        DB::table('songs')->insert([
            'created_at' => carbon::now(),
            'updated_at' => carbon::now(),
            'title' => 'One',
            'singer' => 'Johnny Cash',
        ]);
        DB::table('songs')->insert([
            'created_at' => carbon::now(),
            'updated_at' => carbon::now(),
            'title' => 'Hurt',
            'singer' => 'Johnny Cash',
        ]);
        DB::table('songs')->insert([
            'created_at' => carbon::now(),
            'updated_at' => carbon::now(),
            'title' => 'Walking on sunshine',
            'singer' => 'Katrina and the Waves',
        ]);
        DB::table('songs')->insert([
            'created_at' => carbon::now(),
            'updated_at' => carbon::now(),
            'title' => 'Piano man',
            'singer' => 'Billy Joel',
        ]);
        DB::table('songs')->insert([
            'created_at' => carbon::now(),
            'updated_at' => carbon::now(),
            'title' => 'Go your own way',
            'singer' => 'Fleetwood Mac',
        ]);
        DB::table('songs')->insert([
            'created_at' => carbon::now(),
            'updated_at' => carbon::now(),
            'title' => 'Everywhere',
            'singer' => 'Fleetwood Mac',
        ]);
    }
}
