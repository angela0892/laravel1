<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Alumno extends Model
{
    use HasFactory;
    //AQUÍ EMPIEZO A CODEAR

    protected $table = 'alumnos';
    protected $fillable = [
        'nombre',
        'edad',
        'dni',
        'estado_id'
    ];
    
    public function relacion() {
        return $this->belongsTo(Estado::class, 'estado_id');
    }

    //AQUÍ TERMINO DE CODEAR
}