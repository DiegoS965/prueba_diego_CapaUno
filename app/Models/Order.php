<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre_cliente',
    ];

    public function product()
    {
        return $this->hasMany(Product::class);
    }

    public function detail()
    {
        return $this->hasOne(Detail::class);
    }
}
