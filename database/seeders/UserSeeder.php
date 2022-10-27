<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => "Sa3eed",
            'email' => "mohammedsaeed892002@gmail.com",
            'email_verified_at' => now(),
            'password' => '$2y$10$J2OwidXlwC7/CwpBAjZYRO9.0YduH1avOKDzZT873P4a8WDUxG89q', // password
        ]);

    }
}
