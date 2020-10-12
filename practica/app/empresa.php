<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class empresa extends Model
{
    protected $table='empresas';

    protected $fillable=[
        'nombre',
    ];

    public function tutoreslab(){
        return $this->hasMany(tut_lab::class);
    }
}
