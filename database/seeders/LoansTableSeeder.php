<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class LoansTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Formatear las fechas usando Carbon
        $prestamo_fecha = Carbon::createFromFormat('d/m/Y', '20/03/2024')->toDateString();
        $devolucion_fecha = Carbon::createFromFormat('d/m/Y', '28/03/2024')->toDateString();
        
        DB::table('loans')->insert([
            'prestamo_fecha' => $prestamo_fecha,
            'devolucion_fecha' => $devolucion_fecha,
        ]);

        $prestamo_fecha = Carbon::createFromFormat('d/m/Y', '2/03/2024')->toDateString();
        $devolucion_fecha = Carbon::createFromFormat('d/m/Y', '8/03/2024')->toDateString();
        
        DB::table('loans')->insert([
            'prestamo_fecha' => $prestamo_fecha,
            'devolucion_fecha' => $devolucion_fecha,
        ]);      
    }
}
