<?php

use App\Models\Convocatoria;
use Illuminate\Support\Facades\Route;

Route::get('/convocatorias', function () {
    return Convocatoria::all();
});
