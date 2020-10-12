<?php

use Faker\Generator as Faker;

$factory->define(App\alumno::class, function (Faker $faker) {
    return [
        'nombre'=>$faker->name,
        'apellidos'=>$faker->firstname,
        'ciclo_id' => \App\ciclo::all()->random()->id,
        'ficha_id' => \App\ficha::all()->random()->id,
    ];
});
