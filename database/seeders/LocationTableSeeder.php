<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LocationTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('location')->insert([
            'num_sede' => 'Sede1',
            'sala' => 'Sala informatica',
            'ciudad' => 'Las Palmas',
            'calle' => 'C/Cactus',
        ]);

        DB::table('location')->insert([
            'num_sede' => 'Sede2',
            'sala' => 'Sala diseño',
            'ciudad' => 'Las Palmas',
            'calle' => 'C/Camelia',
        ]);
    }
}
