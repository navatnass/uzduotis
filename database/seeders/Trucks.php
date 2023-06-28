<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Date;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class Trucks extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('trucks')->insert([
            [
                'Unit_number' => 'A1567',
                'Year' => 1995,
                'Notes' => 'Avaiable for rent',
                'created_at' => Date::now(),
                'updated_at' => Date::now()
            ]
        ]);
    }
}