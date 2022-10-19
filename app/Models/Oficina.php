<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Oficina extends Model
{
    use HasFactory;
    protected $table = 'Oficina';
    protected $fillable = [
    'officecode',
    'city',
    'phone',	
    'addressLine1',	
    'addreesLine2',
    'state',	
    'country',	
    'postalCode',
    'territory'
    ];
}

