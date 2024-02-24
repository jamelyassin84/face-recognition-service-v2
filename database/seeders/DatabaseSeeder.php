<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Schedule;
use Illuminate\Database\Seeder;
use Database\Seeders\UserSeeder;
use Database\Seeders\DepartmentSeeder;
use Database\Seeders\SubjectSeeder;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            UserSeeder::class,
            DepartmentSeeder::class,
            SubjectSeeder::class,
            RoomSeeder::class,
            FacultySeeder::class,
            SectionSeeder::class,
            StudentSeeder::class,
            ScheduleSeeder::class,
        ]);

        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
