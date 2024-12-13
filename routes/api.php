<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ConvocatoriaController;
use App\Models\Convocatoria;

Route::get('/convocatoriasApi', [ConvocatoriaController::class, 'index']);
