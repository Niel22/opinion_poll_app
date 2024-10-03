<?php

namespace Database\Seeders;

use App\Models\Department;
use App\Models\Faculty;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        Faculty::create(
            [
                'name' => 'School Pure and Applied Science',
            ],
        );
        Faculty::create(
            [
                'name' => 'School of Engineering',
            ],
        );
        Faculty::create(
            [
                'name' => 'School of Communication and Information',
            ]
        );

        Department::create(
            [
                'name' => 'Computer Science',
                'faculty_id' => '1',
            ]
        );
        Department::create(
            [
                'name' => 'Computer Enineering',
                'faculty_id' => '2',
            ]
        );
        Department::create(
            [
                'name' => 'Mass Communication',
                'faculty_id' => '3',
            ]
        );


    }
}
