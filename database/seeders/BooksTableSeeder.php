<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BooksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('books')->insert([
            'isbn' => 'ASEFG344534',
            'titulo' => 'Java 1',
            'paginas' => 200,
            'curso' => '1A',
            'asignatura' => 'Programacion',
        ]);

        DB::table('books')->insert([
            'isbn' => 'ASEFG344534',
            'titulo' => 'HTML',
            'paginas' => 300,
            'curso' => '2B',
            'asignatura' => 'Lenguaje de Marcas',
        ]);
    }
}
