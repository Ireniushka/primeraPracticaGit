<?php

use Faker\Generator as Faker;

$factory->define(App\tut_doc::class, function (Faker $faker) {
    return [
        'nombre'=>$faker->sentence,
        'apellidos'=>$faker->sentence,
    ];
});
