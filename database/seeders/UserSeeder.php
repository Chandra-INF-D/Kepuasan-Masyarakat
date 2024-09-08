<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        User::factory()->create([
            'name' => 'Admin 123',
            'email' => 'admin123@gmail.com',
            'password' => Hash::make('admin123'),
            'avatar' => hash('sha256', strtolower(trim('admin123@gmail.com')))
        ]);
    }
}
