<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Entrevista extends Model
{
    public function postulacion()
    {
        return $this->belongsTo(Postulacion::class);
    }

}
