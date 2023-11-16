<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Articulo;
use App\Models\Etiquetas;

class Articulos_etiquetas extends Model
{
    public $table = 'articulos_etiquetas';

    public $fillable = [
        'articulo_id',
        'etiqueta_id'

    ];

    public function etiqueta()
    {
        return $this->belongsTo(Etiquetas::class, 'etiqueta_id');
    }
    public function articulo()
    {
        return $this->belongsTo(Articulos::class, 'articulo_id');
    }
}
