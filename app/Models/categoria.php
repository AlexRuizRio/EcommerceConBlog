<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    public $table = 'categorias';

    protected $fillable = [ 'id', 'nombre', 'decripcion' ];

    public function articuloCategoria()
    {
        return $this->hasMany(Articulos_categorias::class, 'categoria_id');
    }
}
