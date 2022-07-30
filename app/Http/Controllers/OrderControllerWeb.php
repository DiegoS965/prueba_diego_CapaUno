<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;

class OrderControllerWeb extends Controller
{
    public function store(Request $request)
    {
        $this->validate($request, [
            'nombre_cliente'=>'required',
        ]);
        $order = new Order();
        $order->nombre_cliente = $request->input('nombre_cliente');
        $order->timestamps = false;
        $order->save();

        return back();
    }
}
