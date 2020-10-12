<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tut_lab extends Model
{
    protected $table='tut_labs';

    protected $fillable=[
        'nombre','apellidos','empresa_id'
    ];

    public function empresas(){
        return $this->belongsTo(empresa::class, 'empresa_id');
    }
}
