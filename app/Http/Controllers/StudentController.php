<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function store(Request $request)
    {
        // Aquí puedes manejar la lógica de almacenamiento
        // Validar y guardar los datos del formulario
        $validatedData = $request->validate([
            'id_estudiante' => 'required|numeric',
            'nombre' => 'required|string|max:50',
            'apellido' => 'required|string|max:50',
            'fecha_nacimiento' => 'required|date',
            'direccion' => 'required|string|max:100',
            'ciudad' => 'required|string|max:50',
            'nacionalidad' => 'required|string|max:50',
            'celular' => 'required|string|max:15',
            'email' => 'required|email|max:50',
            'nombre_padre' => 'required|string|max:50',
            'direccion_padre' => 'required|string|max:100',
            'celular_padre' => 'required|string|max:15',
            'email_padre' => 'required|email|max:50',
            'nombre_madre' => 'required|string|max:50',
            'direccion_madre' => 'required|string|max:100',
            'celular_madre' => 'required|string|max:15',
            'email_madre' => 'required|email|max:50',
        ]);

        // Guardar los datos en la base de datos, etc.
        // ...

        return redirect('/')->with('success', 'Estudiante registrado exitosamente.');
    }
}