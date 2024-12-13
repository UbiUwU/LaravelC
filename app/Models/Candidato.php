<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Candidato extends Model
{
    protected $table = 'candidatos';
    protected $fillable = [
        'nombre',
        'apellido',
        'email',
        'telefono',
        'direccion',
        'fecha_nacimiento',
        'cv_url',
    ];
}
