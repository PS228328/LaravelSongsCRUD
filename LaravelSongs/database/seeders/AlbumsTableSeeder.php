<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;


class AlbumsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('albums')->insert([
            'created_at' => carbon::now(),
            'updated_at' => carbon::now(),
            'band_id' => 1,
            'name' => 'Gold',
            'year' => 1992,
            'times_sold' => 8500000,
        ]);
        DB::table('albums')->insert([
            'created_at' => carbon::now(),
            'updated_at' => carbon::now(),
            'band_id' => 2,
            'name' => 'A kind of magic',
            'year' => 1986,
            'times_sold' => 5500000,
        ]);
        DB::table('albums')->insert([
            'created_at' => carbon::now(),
            'updated_at' => carbon::now(),
            'band_id' => 3,
            'name' => 'Ring of Fire, the legend of Johnny Cash',
            'year' => 2003,
            'times_sold' => 10500000,
        ]);
        DB::table('albums')->insert([
            'created_at' => carbon::now(),
            'updated_at' => carbon::now(),
            'band_id' => 4,
            'name' => 'Toxicity',
            'year' => 2001,
            'times_sold' => 10500000,
        ]);
    }
}
