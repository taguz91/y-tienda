<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Producto;
use Faker\Generator as Faker;

$factory->define(Producto::class, function (Faker $faker) {
    return [
        'id_tienda' => $faker->numberBetween(1, 100),
        'nombre' => $faker->name,
        'precio' => $faker->randomFloat(2, 1, 100),
        'stock' => $faker->numberBetween(1, 1000)
    ];
});
