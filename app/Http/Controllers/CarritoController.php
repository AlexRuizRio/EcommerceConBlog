<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Producto;

class CarritoController extends Controller
{
    public function agregar(Request $request)
    {
        $productoId = $request->input('producto_id');
        $cantidad = $request->input('cantidad', 1);

        $producto = Producto::find($productoId);


        if (!$producto) {
            return redirect()->back()->with('error', 'El producto no existe.');
        }

        $carrito = session()->get('carrito', []);

        if (isset($carrito[$productoId])) {
            $carrito[$productoId]['cantidad'] += $cantidad;
        } else {
            $carrito[$productoId] = [
                'producto' => $producto,
                'cantidad' => $cantidad,
            ];
        }

        session()->put('carrito', $carrito);

        return redirect()->back()->with('success', 'Producto agregado al carrito.');
    }


    public function mostrar()
    {
        $carrito = session()->get('carrito', []);

        $total = 0;
        foreach ($carrito as $item) {
            $total += $item['cantidad'] * $item['producto']->precio;
        }

        session()->put('total', $total);

        return view('carritomostrar', compact('carrito', 'total'));
    }

    public function eliminar(Request $request, $productoId)
    {


        session()->forget("carrito.$productoId");


        return redirect()->route('carritomostrar');

    }


}
