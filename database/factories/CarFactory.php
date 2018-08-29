<?php

use Faker\Generator as Faker;

$factory->define(App\Car::class, function (Faker $faker) {
    return [
        'brand' => $faker->word,
        'model' => $faker->word,
        'year' => $faker->date('Y-m-d','now'),
        'maxSpeed' => $faker->numberBetween(20,300),
        'isAutomatic' => $faker->boolean,
        'engine' => $faker->word,
        'numberOfDoors' => $faker->numberBetween(2,6)
    ];
});
