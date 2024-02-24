<?php

namespace Database\Seeders;

use App\Models\Admin;
use App\Models\Student;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Student::create([
            'first_name' => 'John',
            'last_name' => 'Doe',
            'middle_name' => 'Smith',
            'suffix' => 'Jr',
            'course_id' => 1,
            'studentable_id' => 1,
            'studentable_type' => Admin::class,
        ]);
    }
}
