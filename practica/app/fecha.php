<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class fecha extends Model
{
    protected $table='fechas';

    protected $fillable=[
        'f_ini','f_fin','dia1','dia2','dia3','ciclo_id'
    ];

    public function ciclos_fecha(){
        return $this->belongsTo(ciclo::class, 'ciclo_id');
    }
}
