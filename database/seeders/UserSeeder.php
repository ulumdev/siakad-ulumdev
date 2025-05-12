<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::factory(10)->create();

        User::create([
            'name' => 'Ulumdev Admin',
            'email' => 'ulumdev@siakad.com',
            'email_verified_at' => now(),
            'password' => Hash::make('siakad1234'),
            'remember_token' => Str::random(10),
        ]);
    }
}
