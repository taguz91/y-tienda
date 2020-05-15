<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Tienda extends Model
{
    use SoftDeletes;

    protected $table = 'tiendas';

    protected $fillable = [
       'nombre',
       'direccion' 
    ];

    function productos() {
        return $this->hasMany('App\Models\Producto', 'id_tienda');
    }

    function ventas() {
        return $this->hasMany('App\Models\Venta', 'id_tienda');
    }
    
}
