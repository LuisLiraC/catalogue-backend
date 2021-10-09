<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class MoviesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=0; $i < 10; $i++) {
            DB::table('movies')->insert([
                'title' => Str::random(10),
                'synopsis' => Str::random(10),
                'year' => 2021,
                'cover' => Str::random(10)
            ]);
        }
    }
}
