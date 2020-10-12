<?php

use Faker\Generator as Faker;

$factory->define(App\colabora::class, function (Faker $faker) {
    return [
        'empresa_id' => \App\empresa::all()->random()->id,
        'ciclo_id' => \App\ciclo::all()->random()->id,
    ];
});
