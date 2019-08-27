<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Factura;
use App\Models\Cliente;
use Faker\Generator as Faker;

$factory->define(App\Models\Factura::class, function (Faker $faker) {
    return [
    	'fecha'=>$faker->date,
    	'cliente_id'=> function(){
    		return factory(App\Models\Cliente::class)->create()->id;
    	}
    ];
});
