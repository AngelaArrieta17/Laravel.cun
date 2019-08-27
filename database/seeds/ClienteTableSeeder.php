<?php

use Illuminate\Database\Seeder;
use App\Models\Cliente;

class ClienteTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       // $clientes = factory(App\Models\Cliente::class, 5)->create();

    	$producto = factory(App\Models\Cliente::class, 5)
        	->create()
        	->each(function($cliente){
        		$cliente->facturas()->save(factory(App\Models\Factura::class)->make());
        	});
    }
}
