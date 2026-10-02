<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    public function run(): void
    {
        DB::table("users")->insert([
            "name" => "sarmad",
            "email" => 'abc@gmail.com',
            "email_verified_at" => now(),
            "password" => Hash::make("897qw45893"),
            "remember_token" => Str::random(30),
        ]);
    }
}
