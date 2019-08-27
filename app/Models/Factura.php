<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Factura extends Model
{
    protected $table = 'facturas';

    protected $fillable = [
    	'id',
    	'fecha',
    	'cliente_id'
    ];

    protected $hidden = ['created_at','updated_at'];

     public function cliente(){

    	return $this ->belongsTo('App\Models\Cliente');
    
    }
}
