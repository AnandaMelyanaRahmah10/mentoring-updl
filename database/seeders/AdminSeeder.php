<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    public function run(): void
    {
        User::updateOrCreate(
            [
                'username' => 'admin',
            ],
            [
                'name' => 'Administrator',
                'email' => 'admin@mentoring-pln.local',
                'password' => Hash::make('123'),
                'role' => 'admin',
                'status' => 'aktif',
            ]
        );
    }
}