<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class colabora extends Model
{
    protected $table='colaboras';

    protected $fillable=[
        'ciclo_id','empresa_id'
    ];

}   
