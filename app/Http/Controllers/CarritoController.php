<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Producto;
use Illuminate\Support\Facades\Session;


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

        $accion = $request->input('accion');

        if ($accion === 'comprar') {
            
            return redirect()->route('carritomostrar');
        }

        return redirect()->back()->with('success', 'Producto agregado al carrito.');
        
    }


    public function mostrar()
{
    $carrito = session()->get('carrito', []);
    
    return view('carritomostrar', compact('carrito'));
}

public function eliminarProducto($productoId)
{
    $carrito = Session::get('carrito', []);

    if (isset($carrito[$productoId])) {
        unset($carrito[$productoId]);
        Session::put('carrito', $carrito);
        Session::save(); 
    }

    return redirect()->back();
}
    public function actualizarCarrito($productoId, $cantidad)
    {
        if ($cantidad <= 0) {
            if (isset($this->carrito[$productoId])) {
                unset($this->carrito[$productoId]);
                $this->emit('eliminarProducto', $productoId);
            }
        } else {
            $this->carrito[$productoId]['cantidad'] = $cantidad;
        }
    
        session()->put('carrito', $this->carrito);
    }

}
