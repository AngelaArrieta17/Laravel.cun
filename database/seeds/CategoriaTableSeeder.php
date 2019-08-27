<?php

use Illuminate\Database\Seeder;
use App\Models\Categoria;
class CategoriaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      
      Categoria::create(
      	[
         'nombre' => 'Abarrotes',
         'descripcion' => 'viveres'
        ]);

      Categoria::create(
      	[
         'nombre' => 'Arroz',
         'descripcion' => 'grano'
        ]);
      Categoria::create(
      	[
         'nombre' => 'colgate',
         'descripcion' => 'aseo'
        ]);
      Categoria::create(
      	[
         'nombre' => 'yupi',
         'descripcion' => 'dulce'
        ]);

       
    }
}
