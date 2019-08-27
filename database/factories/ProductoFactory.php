<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Producto;
use Faker\Generator as Faker;

$factory->define(App\Models\Producto::class, function (Faker $faker) {
    return [
    	'nombre'=>$faker->lastName,
    	'stock'=>$faker->country,
    ];
});
