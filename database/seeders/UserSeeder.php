<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $amount = 20;

        for($i = 1; $i <= $amount; $i++) {
            User::create([
                'username' => fake()->username,
                'email' => fake()->email,
                'password' => hash::make('password')
            ]);
        }

        User::create([
            'username' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => hash::make('....')
        ]);
    }
}
