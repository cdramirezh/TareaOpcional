<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class VehiculoModel extends Model
{
    //
    protected $fillable = [
        'placa', 'marca', 'duenho'
    ];
}
