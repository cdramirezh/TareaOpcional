<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PersonaModel extends Model
{
    //
    protected $fillable = [
        'cedula', 'nombre_completo'
    ];
}
