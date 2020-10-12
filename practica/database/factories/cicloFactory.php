<?php

use Faker\Generator as Faker;

$factory->define(App\ciclo::class, function (Faker $faker) {
    return [
        'grado'=>$faker->sentence,
        'nombre'=>$faker->sentence,
    

    ];
});
