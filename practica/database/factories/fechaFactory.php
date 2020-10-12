<?php

use Faker\Generator as Faker;

$factory->define(App\fecha::class, function (Faker $faker) {
    return [
        'f_ini'=>$faker->date,
        'f_fin'=>$faker->date,
        'dia1'=>$faker->sentence,
        'dia2'=>$faker->sentence,
        'dia3'=>$faker->sentence,
        'ciclo_id' => \App\ciclo::all()->random()->id,
    ];
});
