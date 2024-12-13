<?php

namespace App\Http\Controllers;

use App\Models\Convocatoria;
use Illuminate\Http\Request;

class ConvocatoriaController extends Controller
{
    // Obtener todas las convocatorias con la información de la empresa
    public function index()
    {
        // Cargar la relación 'empresa' con la convocatoria
        $convocatorias = Convocatoria::with('empresa')->get();
        return response()->json($convocatorias);
    }

    // Obtener una convocatoria específica
    public function show($id)
    {
        $convocatoria = Convocatoria::with('empresa')->find($id);

        if ($convocatoria) {
            return response()->json($convocatoria);
        }

        return response()->json(['message' => 'Convocatoria no encontrada'], 404);
    }
}
