<?php

namespace App\Http\Controllers;

use App\Models\Convocatoria;
use Illuminate\Http\Request;

class ConvocatoriaController extends Controller
{
    // Obtener todas las convocatorias
    public function index()
    {
        return response()->json(Convocatoria::all());
    }

    // Crear una nueva convocatoria
    public function store(Request $request)
    {
        $request->validate([
            'titulo' => 'required|string|max:255',
            'descripcion' => 'required|string',
            'fecha_inicio' => 'required|date',
            'fecha_fin' => 'required|date',
            'ubicacion' => 'required|string',
            'salario' => 'required|numeric',
            'requisitos' => 'required|string',
        ]);

        $convocatoria = Convocatoria::create($request->all());

        return response()->json($convocatoria, 201);
    }
}
