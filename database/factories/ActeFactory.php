<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Acte;
use Faker\Generator as Faker;

$factory->define(Acte::class, function (Faker $faker) {
    return [
        'name' => $faker->sentence(2)
    ];
});
