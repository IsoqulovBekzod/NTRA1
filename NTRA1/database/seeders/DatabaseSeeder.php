<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        $this->call([
            BranchSeeder::class,
            AdSeeder::class,
            UserSeeder::class,
            StatusSeeder::class
        ]);
        User::factory()->create([
            'name' => 'Abdurashid',
            'email' => 'Abdurashid@gmail.com',
            'password' => Hash::make('12345678'),
        ]);
    }
}
