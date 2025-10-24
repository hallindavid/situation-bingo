<?php

namespace Database\Seeders;

use App\Models\Situation;
use App\Models\User;
use CardHelper;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        Situation::factory(30)->create();

        User::factory(10)->create();

        User::factory()->create([
            'name' => 'David Hallin',
            'email' => 'dave@test.com',
            'password' => Hash::make('password')
        ]);

        CardHelper::generateCards();

    }
}
