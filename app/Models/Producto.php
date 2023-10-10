<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    use HasFactory;
    
    protected $fillable= [ 'id','nombre', 'descripcion', 'descripcionextensa', 'precio' ,'descuento', 'autormarca' , 'img' , 'cantidad', 'tipo'];
}
