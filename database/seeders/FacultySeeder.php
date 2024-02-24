<?php

namespace Database\Seeders;

use App\Models\Admin;
use App\Models\Faculty;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FacultySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Faculty::create([
            'first_name' => 'John',
            'last_name' => 'Doe',
            'middle_name' => 'Smith',
            'suffix' => 'Jr',
            'facultyable_id' => 1,
            'facultyable_type' => Admin::class
        ]);
    }
}
