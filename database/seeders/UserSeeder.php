<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        User::create([
            'name' => 'Demo User',
            'email' => 'demo@healthmart.test',
            'phone' => '9999999999',
            'password' => Hash::make('password'),
        ]);
    }
}
