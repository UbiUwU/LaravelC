<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ConvocatoriaController;

Route::middleware('api')->group(function () {
    // Rutas de API
    Route::get('convocatoriasapi', [ConvocatoriaController::class, 'index']);
});
