<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    protected $table = 'productos';

    protected $fillable = [
    	'id',
    	'nombre',
    	'stock'
    	
    ];

    protected $hidden = ['created_at','updated_at'];

    
}
