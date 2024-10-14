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
            'name' => 'Reza Octa',
            'email' => 'reza@gamil.com',
            'email_verified_at' => now(),
            'username' => 'rezaocta710',
            'password'=> Hash::make('password'),
            "remember_token" => Str::random(10)
        ]);

        User::factory(5)->create();
    }
}
