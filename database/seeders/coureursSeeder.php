<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class coureursSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('coureurs')->insert([
            "Voornaam" => "Oscar",
            "Achternaam" => "Piastri",
            "Team" => "McLaren F1 team",
            "Contract" => "2026",
        ]);
    }
}
