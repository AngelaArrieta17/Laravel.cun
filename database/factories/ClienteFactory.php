<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Cliente;
use Faker\Generator as Faker;

$factory->define(App\Models\Cliente::class, function (Faker $faker) {
    return [ 
        'nombre'=>$faker->firstName,
        'apellido'=>$faker->lastName,
        'direccion'=>$faker->country,
        'fecha_nacimiento'=>$faker->date,
        'telefono'=>$faker->phoneNumber,
        'email'=>$faker->email, 
    ];
});
