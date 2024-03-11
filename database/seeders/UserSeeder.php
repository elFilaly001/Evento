<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = User::create([
            'name' => 'Abdou',
            'email' => 'abdou@gmail.com',
            'password' => Hash::make('123'),
            'role' => 'Admin',
        ]);
        $user->assignRole('Admin');
    }
}
