<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Empresa extends Model
{
    protected $table = 'empresas'; // Asegúrate de que coincida con el nombre de la tabla
    protected $fillable = [
        'nombre',
        'descripcion',
        'direccion',
        'telefono',
        'email_contacto',
        'sitio_web',
        'sector',
    ];

    // Relación con el modelo Convocatoria
    public function convocatorias()
    {
        return $this->hasMany(Convocatoria::class, 'empresa_id');  // Una empresa puede tener muchas convocatorias
    }
}
