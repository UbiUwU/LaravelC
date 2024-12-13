<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Postulacion extends Model
{
    public function candidato()
    {
        return $this->belongsTo(Candidato::class);
    }

    public function convocatoria()
    {
        return $this->belongsTo(Convocatoria::class);
    }

}
