<?php

namespace Database\Seeders;

use App\Models\Course;
use App\Models\Department;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DepartmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $departments = Department::create([
            'name' => 'CICT',
            'description' => 'College of Information and Communication Technology'
        ]);

        $course = Course::create([
            'number' => 'BSIT',
            'description' => 'Bachelor of Science in Information Technology',
            'department_id' => $departments->id
        ]);
    }
}
