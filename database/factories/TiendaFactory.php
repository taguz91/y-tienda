<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Tienda;
use Faker\Generator as Faker;

$factory->define(Tienda::class, function (Faker $faker) {
    return [
        'nombre' => $faker->unique()->company,
        'direccion' => $faker->sentence(4),
    ];
});
