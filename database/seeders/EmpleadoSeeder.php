<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EmpleadoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('empleados')->insert([
            [
                'nombre' => 'Juan',
                'apellido' => 'Pérez',
                'correo' => 'juan.perez@example.com',
                'salario' => 50000.00,
            ],
            [
                'nombre' => 'Ana',
                'apellido' => 'Gómez',
                'correo' => 'ana.gomez@example.com',
                'salario' => 60000.00,
            ],
            [
                'nombre' => 'Luis',
                'apellido' => 'Rodríguez',
                'correo' => 'luis.rodriguez@example.com',
                'salario' => 55000.00,
            ],
            // Agregue más empleados aquí para llegar a 10
        ]);
    }
}
