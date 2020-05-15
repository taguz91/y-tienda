<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Venta extends Model
{
    use SoftDeletes; 

    protected $table = 'Ventas';

    protected $fillable = [
        'id_tienda',
        'productos',
    ];

    function tienda() {
        return $this->belongsTo('App\Models\Tienda', 'id_tienda');
    }

    function getProductosAttribute($value) {
        return json_decode($value);
    }

}
