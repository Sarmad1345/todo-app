<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{

    // Source - https://stackoverflow.com/a/6239010
    // Posted by Ibu, modified by community. See post 'Timeline' for change history
    // Retrieved 2026-10-02, License - CC BY-SA 4.0


    // 2003-10-16

    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */



    public function run(): void
    {
        DB::table("users")->insert([
            "name" => "sarmad",
            "email" => 'abc@gmail.com',
            "email_verified_at" => now(),
            "password" => "897qw45893",
            "remember_token" => Str::random(30),


        ]);
    }
}
