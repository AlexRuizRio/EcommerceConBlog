<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Etiqueta extends Model
{
    public $table = 'Etiquetas';

    protected $fillable = [ 'id', 'nombre', 'descripcion'];


    public function articuloEtiqueta()
    {
        return $this->hasMany(Articulos_etiquetas::class, 'etiqueta_id');
    }
}
