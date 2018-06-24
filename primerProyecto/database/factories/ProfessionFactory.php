<?php

use Faker\Generator as Faker;

$factory->define(App\Models\Profession::class, function (Faker $faker) {
    return [
        'title' => $faker->sentence(3, false)/*Genera una oración aleatoria que
        contiene 3 palabras, viene por defecto en true*/
    ];
});
