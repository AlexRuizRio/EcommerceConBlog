<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Articulo;

class ArticuloController extends Controller
{



    public function mostarBlog()
    {
        $articulos = Articulo::with('autor', 'comentarios', 'categorias', 'etiquetas')->get();
        $articulosRecientes = Articulo::with('autor', 'comentarios', 'categorias', 'etiquetas')
        ->orderBy('fecha_publicacion', 'desc')
        ->limit(3)
        ->get();

        
        $articulosArray = $articulos->toArray();
        $articuloRecArray = $articulosRecientes->toArray();
       
        return view ('blog',compact('articulosArray', 'articuloRecArray'));
    }

    public function show($titulo)
    {
        
        $articulo = Articulo::where('titulo', $titulo)->first();
    
        return view('blogdetalle', ['articulo' => $articulo]);
    }


}
