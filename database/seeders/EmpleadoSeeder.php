<?php

namespace Database\Seeders;

use App\Models\Empleado;
use Illuminate\Database\Seeder;

class EmpleadoSeeder extends Seeder
{
    public function run(): void
    {
        $data = [
            ['nombre'=>'Denilson','apellido'=>'Pérez','correo'=>'denilson.perez@demo.com','salario'=>3500.00],
            ['nombre'=>'Jorge','apellido'=>'García','correo'=>'jorge.garcia@demo.com','salario'=>4200.50],
            ['nombre'=>'Samanta','apellido'=>'López','correo'=>'samanta.lopez@demo.com','salario'=>3800.75],
        ];
        foreach ($data as $e) { Empleado::create($e); }
    }
}
