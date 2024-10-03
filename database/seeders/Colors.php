<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Colors extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table("colors")->insert([
            ['name' => 'red'],          // Bright Red
            ['name' => 'green'],        // Bright Green
            ['name' => 'blue'],         // Bright Blue
            ['name' => 'orange'],       // Bright Orange
            ['name' => 'yellow'],       // Bright Yellow
            ['name' => 'purple'],       // Bright Purple
            ['name' => 'cyan'],         // Bright Cyan
            ['name' => 'magenta'],      // Bright Magenta
            ['name' => 'teal'],         // Teal
            ['name' => 'navy'],         // Navy Blue
        ]);


    }
}
