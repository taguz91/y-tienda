<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Producto extends Model
{
    use SoftDeletes;

    protected $table = 'productos';

    protected $fillable = [
        'id_tienda',
        'nombre',
        'precio',
        'stock',
    ];

    function tienda() {
        return $this->belongsTo('App\Models\Tienda', 'id_tienda');
    }

}
