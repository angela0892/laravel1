<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Estado extends Model
{
    use HasFactory;
    //AQUÍ EMPIEZO A CODEAR
    
    protected $table = 'estados';
    protected $fillable = [
        'estado'
    ];

    //AQUÍ TERMINO DE CODEAR
}