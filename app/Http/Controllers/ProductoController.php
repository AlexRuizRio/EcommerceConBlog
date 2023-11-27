<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Producto;
use App\Models\Articulo;

class ProductoController extends Controller
{
       
    public function index()
    {
        $articulosRecientes = Articulo::with('autor', 'comentarios', 'categorias', 'etiquetas')
        ->orderBy('fecha_publicacion', 'desc')
        ->limit(3)
        ->get();

        $productos = Producto::all()->toArray();
        usort($productos, function($a, $b) {
            return $b['descuento'] - $a['descuento'];
        });
        $productosbaratos= array_slice($productos, 0, 3);
        
        return view('welcome', compact('productosbaratos', 'articulosRecientes'));
    }

    public function ebook()
    {
        $productos = Producto::all();
        return view('ebook', compact('productos'));
    }

    public function curso()
    {
        $productos = Producto::all();
        return view('cursos', compact('productos'));
    }

    public function plantilla()
    {
        $productos = Producto::all();
        return view('plantilla', compact('productos'));
    }


    public function create()
    {
        return view('productos.create');
    }

    public function store(Request $request)
    {
        $productos = new Producto([
            'nombre' => $request->input('nombre'),
            // Otras propiedades
        ]);
        $productos->save();

        return redirect()->route('productos.index')->with('success', 'Componente creado exitosamente');
    }

    public function edit($id)
    {
        $productos = Producto::findOrFail($id);
        return view('productos.edit', compact('productos'));
    }

    public function update(Request $request, $id)
    {
        $productos = Producto::findOrFail($id);
        $productos->name = $request->input('nombre');
        // Actualizar otras propiedades
        $productos->save();

        return redirect()->route('productos.index')->with('success', 'Componente actualizado exitosamente');
    }

    public function destroy($id)
    {
        $productos = Producto::findOrFail($id);
        $productos->delete();

        return redirect()->route('productos.index')->with('success', 'Componente eliminado exitosamente');
    }

    public function show($nombre)
{
    
    $producto = Producto::where('nombre', $nombre)->first();

    return view('detalleproducto', ['producto' => $producto]);
}
}
