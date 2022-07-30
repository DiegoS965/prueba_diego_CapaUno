<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $orders = Order::all();
        return response($orders,200);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'nombre_cliente'=>'required',
        ]);
        $order = new Order();
        $order->nombre_cliente = $request->input('nombre_cliente');
        $order->timestamps = false;
        $order->save();

        return response('Orden agregada correctamente',201);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return Order::find($id);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $order = Order::find($id);

        if ($order == null)
        {
            return response("Orden no encontrada",200);
        }

        $order->timestamps = false;
        $order->update($request->all());

        return response("Orden actualizada exitosamente",200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $order = Order::find($id);

        if ($order == null)
        {
            return response("Orden no encontrada",200);
        }
        
        $order->delete();

        return response ("Orden borrada exitosamente",200);
    }
}
