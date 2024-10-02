<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Reza',
            'email' => 'reza@gam.com',
            'email_verified_at' => now(),
            'username' => 'rezaocta',
            'password'=> Hash::make('password'),
            "remember_token" => Str::random(10)
        ]);

        User::factory(5)->create();
    }
}
