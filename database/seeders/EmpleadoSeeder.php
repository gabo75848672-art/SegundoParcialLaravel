<?php

namespace Database\Seeders;

use App\Models\Empleado;
use Illuminate\Database\Seeder;

class EmpleadoSeeder extends Seeder
{
    public function run(): void
    {
        $data = [
          [
   
    ['nombre'=>'María','apellido'=>'Rodríguez','correo'=>'maria.rodriguez@demo.com','salario'=>5100.25],
    ['nombre'=>'Carlos','apellido'=>'Martínez','correo'=>'carlos.martinez@demo.com','salario'=>3950.00],
    ['nombre'=>'Ana','apellido'=>'Hernández','correo'=>'ana.hernandez@demo.com','salario'=>4500.80],
    ['nombre'=>'Ricardo','apellido'=>'Sánchez','correo'=>'ricardo.sanchez@demo.com','salario'=>6000.00],
    ['nombre'=>'Laura','apellido'=>'Ramírez','correo'=>'laura.ramirez@demo.com','salario'=>3250.60],
    ['nombre'=>'Miguel','apellido'=>'Torres','correo'=>'miguel.torres@demo.com','salario'=>4875.50],
    ['nombre'=>'Sofía','apellido'=>'Flores','correo'=>'sofia.flores@demo.com','salario'=>5500.00],
    ['nombre'=>'Daniel','apellido'=>'Díaz','correo'=>'daniel.diaz@demo.com','salario'=>4120.30],
    ['nombre'=>'Elena','apellido'=>'Vargas','correo'=>'elena.vargas@demo.com','salario'=>3700.00],
    ['nombre'=>'Javier','apellido'=>'Rojas','correo'=>'javier.rojas@demo.com','salario'=>5350.90]
]
        ];
        foreach ($data as $e) { Empleado::create($e); }
    }
}
