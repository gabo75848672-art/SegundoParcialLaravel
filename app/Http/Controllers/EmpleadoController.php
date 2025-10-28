<?php

namespace App\Http\Controllers;

use App\Models\Empleado;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class EmpleadoController extends Controller
{
    public function index()
    {
        return Empleado::orderBy('id','desc')->get();
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'nombre'   => ['required','string','max:255'],
            'apellido' => ['required','string','max:255'],
            'correo'   => ['required','email','max:255', Rule::unique('empleados','correo')],
            'salario'  => ['required','numeric','min:0']
        ]);
        $empleado = Empleado::create($data);
        return response()->json($empleado, 201);
    }
}
