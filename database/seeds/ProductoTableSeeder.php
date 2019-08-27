<?php

use Illuminate\Database\Seeder;
use App\Models\Producto;
use App\Models\Factura;

class ProductoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $producto = factory(App\Models\Cliente::class, 5)
        	->create()
        	->each(function($cliente){
        		$cliente->facturas()->save(factory(App\Models\Factura::class)->make());
        	});
    }
}
