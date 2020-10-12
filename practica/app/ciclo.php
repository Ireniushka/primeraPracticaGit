<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ciclo extends Model
{
        protected $table='ciclos';
    
        protected $fillable=[
            'grado','nombre'
        ];
    
    }      
