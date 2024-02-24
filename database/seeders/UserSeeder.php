<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = User::create(
            [
                'name' => 'John Doe',
                'email' => 'email@example.com',
                'email_verified_at' => now(),
                'password' =>   Hash::make('password'),
                'remember_token' => Str::random(10),
            ]
        );

        $user->admin()->create(
            [
                'full_name' => 'John Doe',
            ]
        );
    }
}
