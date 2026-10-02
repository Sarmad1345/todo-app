<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class TodosSeeder extends Seeder
{

    public function run(): void
    {
        DB::table("todos")->insert([
            "title" => Str::random(10),
            'description' => Str::random(50),
        ]);
    }
}
