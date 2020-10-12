<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ficha extends Model
{
    protected $table='tut_docs';

    protected $fillable=[
        'dia_semana','fecha','actividad','alumno_id'
    ];

    public function alumnos(){
        return $this->belongsTo(alumnos::class, 'alumno_id');
    }
}
