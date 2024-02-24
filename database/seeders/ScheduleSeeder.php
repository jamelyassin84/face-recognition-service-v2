<?php

namespace Database\Seeders;

use App\Models\Schedule;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ScheduleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Schedule::create([
            'faculty_id' => 1,
            'course_id' => 1,
            'room_id' => 1,
            'subject_id' => 1,
            'day' => 'mon',
            'start_time' => '08:00:00',
            'end_time' => '10:00:00',
            'students' => json_encode([1]),
        ]);
    }
}
