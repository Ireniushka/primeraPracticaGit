<?php

use Faker\Generator as Faker;

$factory->define(App\ficha::class, function (Faker $faker) {
    return [
        'dia_semana'=>$faker->sentence,
        'fecha'=>$faker->sentence,
        'actividad'=>$faker->sentence,
    ];
});
