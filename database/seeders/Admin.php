<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Admin extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            "name"=> "Administrator",
            "email"=> "admin@gmail.com",
            "password"=> "password",
            'role' => 'admin',
            'faculty_id' => 1,
            'department_id' => 1
        ]);
    }
}
