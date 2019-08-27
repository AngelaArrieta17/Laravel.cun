<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    protected $table = 'clientes';

    protected $fillable = [
    	'id',
    	'nombre',
    	'apellido',
    	'direccion',
    	'fecha_nacimiento',
    	'telefono',
    	'email'
    ];

    protected $hidden = ['created_at','updated_at'];

    public function facturas(){
        return $this ->hasMany('App\Models\Factura');
    }

}
