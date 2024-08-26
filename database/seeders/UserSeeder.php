<?php

namespace Database\Seeders;

use App\Models\User;
use GuzzleHttp\Promise\Create;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Muhamad Ariel Septiadi',
            'username' => 'ariel.septiadi',
            'email' => 'arielseptiadi3@gmail.com',
            'email_verified_at' => now(),
            'password'=> Hash::make('password'),
            'remember_token' => Str::random(10)
        ]);

        User::factory(5)->Create();
    }
}
