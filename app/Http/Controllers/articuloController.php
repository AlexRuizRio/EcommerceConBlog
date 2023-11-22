<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Articulo;

class ArticuloController extends Controller
{
    public function index()
    {
        $articulos = Articulo::with('autor', 'comentarios', 'categorias', 'etiquetas')->get();

        // Convertir los resultados a un array
        $articulosArray = $articulos->toArray();
       
        return view ('blog',compact('articulosArray'));
    }


}
