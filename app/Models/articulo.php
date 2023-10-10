<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class articulo extends Model
{
    use HasFactory;

    protected $fillable = [ 'id', 'titulo', 'contenido', 'fecha_publicacion', 'id_autor'];
    

   
        public function autor()
        {
            return $this->belongsTo(Usuario::class, 'id_autor');
        }
    
        public function comentarios()
        {
            return $this->hasMany(Comentario::class, 'id_articulo');
        }
    
        public function categorias()
        {
            return $this->belongsToMany(Categoria::class, 'articulo_categoria', 'id_articulo', 'id_categoria');
        }
    
        public function etiquetas()
        {
            return $this->belongsToMany(Etiqueta::class, 'articulo_etiqueta', 'id_articulo', 'id_etiqueta');
        }
    
    
    
}
