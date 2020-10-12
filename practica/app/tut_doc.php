<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tut_doc extends Model
{
    protected $table='tut_docs';

    protected $fillable=[
        'nombre','apellidos','ciclo_id'
    ];

    public function ciclos_tut(){
        return $this->belongsTo(ciclo::class, 'ciclo_id');
    }
}
