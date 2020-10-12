<?php

use Faker\Generator as Faker;

$factory->define(App\tut_lab::class, function (Faker $faker) {
    return [
        'nombre'=>$faker->name,
        'apellidos'=>$faker->firstname,
        'empresa_id' => \App\empresa::all()->random()->id,
    ];
});
