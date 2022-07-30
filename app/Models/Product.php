<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $table = 'productos';

    protected $fillable = [
        'nombre_producto',
        'descripcion_producto',
        'precio',
    ];

    public function order()
    {
        return $this->hasOne(Order::class);
    }

}
