<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
class Convocatoria extends Model
{
    protected $table = 'convocatorias';
    protected $fillable = [
        'titulo',
        'descripcion',
        'fecha_inicio',
        'fecha_fin',
        'ubicacion',
        'salario',
        'requisitos',
        'estado',
        'tipo_contrato',
        'nivel_requerido',
        'categoria',
        'empresa_id',
        'contacto_email',
    ];

    // Relación con el modelo Empresa
    public function empresa()
    {
        return $this->belongsTo(Empresa::class, 'empresa_id');  // Relación inversa
    }
}
