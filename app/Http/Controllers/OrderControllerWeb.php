<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OrderControllerWeb extends Controller
{
    public function store(Request $request)
    {
        $this->validate($request, [
            'nombre_cliente'=>'required',
        ]);

        $request->product()->create($request->all());

        return back();
    }
}
