<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Articulo extends Model
{
    public $table = 'articulos';

    protected $fillable = [ 'id', 'titulo', 'contenido', 'fecha_publicacion', 'id_autor', 'img'];
    

    //Falta esta relacion
        public function autor(): \Illuminate\Database\Eloquent\Relations\BelongsTo
        {
            return $this->belongsTo(Usuario::class, 'id_autor');
        }
    
        public function comentarios(): \Illuminate\Database\Eloquent\Relations\HasMany
        {
            return $this->hasMany(Comentario::class, 'id_articulo');
        }
    
        public function categorias(): \Illuminate\Database\Eloquent\Relations\HasMany
        {
            return $this->HasMany(Articulos_categorias::class, 'articulo_id');
        }
    
        public function etiquetas(): \Illuminate\Database\Eloquent\Relations\HasMany
        {
            return $this->HasMany(Articulos_etiquetas::class, 'etiqueta_id');
        }
    
    
    
}
