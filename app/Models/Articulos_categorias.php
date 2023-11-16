<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Articulos_categorias extends Model
{
    public $table = 'articulos_categorias';

    public $fillable = [
        'articulo_id',
        'categoria_id'

    ];

    public function categoria()
    {
        return $this->belongsTo(Categorias::class, 'categoria_id');
    }
    public function articulo()
    {
        return $this->belongsTo(Articulos::class, 'articulo_id');
    }
}