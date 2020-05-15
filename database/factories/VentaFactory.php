<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Venta;
use Faker\Generator as Faker;

$factory->define(Venta::class, function (Faker $faker) {
    return [
        'id_tienda' => $faker->numberBetween(1, 100),
        'productos' => json_encode([
            [
                'id_producto' => $faker->numberBetween(1, 500),
                'cantidad' => $faker->numberBetween(1, 100),
                'total' => $faker->randomFloat(2, 1, 10)
            ],
            [
                'id_producto' => $faker->numberBetween(1, 500),
                'cantidad' => $faker->numberBetween(1, 100),
                'total' => $faker->randomFloat(2, 1, 10)
            ],
            [
                'id_producto' => $faker->numberBetween(1, 500),
                'cantidad' => $faker->numberBetween(1, 100),
                'total' => $faker->randomFloat(2, 1, 10)
            ]
        ]),
        'total' => $faker->randomFloat(2, 1, 100)
    ];
});
