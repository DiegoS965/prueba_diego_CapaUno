<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductControllerWeb extends Controller
{
    public function index()
    {
        $products = Product::all();

        return view('index',[
            'products' => $products,
        ]);
    }
}
