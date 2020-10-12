<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class alumno extends Model
{
    protected $table='alumnos';

    protected $fillable=[
        'nombre','apellidos','ciclo_id', 'ficha_id'
    ];

    public function ciclos(){
        return $this->belongsTo(ciclo::class, 'ciclo_id');
    }

    public function fichas(){
        return $this->hasMany(ficha::class, 'ficha_id');
    }
}
