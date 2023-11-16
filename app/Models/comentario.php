<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comentario extends Model
{
    public $table = 'comentarios';

    protected $fillable =['id', 'contenido', 'id_articulo', 'id_usuario'];

    public function comentario(): \Illuminate\Database\Eloquent\Relations\belongsTo
        {
            return $this->belongsTo(Articulo::class, 'id_articulo');
        }
        //Falta la relacion de usuario
}
