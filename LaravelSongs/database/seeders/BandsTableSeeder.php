<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Carbon\Carbon;

class BandsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('bands')->insert([
            'created_at' => carbon::now(),
            'updated_at' => carbon::now(),
            'name' => 'ABBA',
            'genre' => 'Pop',
            'founded' => 1972,
            'active_till' => 1982,
        ]);
        DB::table('bands')->insert([
            'created_at' => carbon::now(),
            'updated_at' => carbon::now(),
            'name' => 'Queen',
            'genre' => 'Rock',
            'founded' => 1970,
        ]);
        DB::table('bands')->insert([
            'created_at' => carbon::now(),
            'updated_at' => carbon::now(),
            'name' => 'Johnny Cash',
            'genre' => 'Country',
            'founded' => 1954,
            'active_till' => 2003,
        ]);
        DB::table('bands')->insert([
            'created_at' => carbon::now(),
            'updated_at' => carbon::now(),
            'name' => 'System of a down',
            'genre' => 'Progressive metal',
            'founded' => 1995,
        ]);
        DB::table('bands')->insert([
            'created_at' => carbon::now(),
            'updated_at' => carbon::now(),
            'name' => 'Bee Gees',
            'genre' => 'Softrock',
            'founded' => 1958,
            'active_till' => 2012,
        ]);
        DB::table('bands')->insert([
            'created_at' => carbon::now(),
            'updated_at' => carbon::now(),
            'name' => 'Billy Joel',
            'genre' => 'Pop',
            'founded' => 1972,
            'active_till' => 1993,
        ]);
        DB::table('bands')->insert([
            'created_at' => carbon::now(),
            'updated_at' => carbon::now(),
            'name' => 'Katrina and the Waves',
            'genre' => 'Poprock',
            'founded' => 1981,
            'active_till' => 1999,
        ]);
        DB::table('bands')->insert([
            'created_at' => carbon::now(),
            'updated_at' => carbon::now(),
            'name' => 'Danny Vera',
            'genre' => 'Pop',
            'founded' => 2018,
        ]);
        DB::table('bands')->insert([
            'created_at' => carbon::now(),
            'updated_at' => carbon::now(),
            'name' => 'Fleetwood Mac',
            'genre' => 'Poprock',
            'founded' => 1967,
        ]);
    }
}
