<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Detalle_pedidos extends Model
{
    use HasFactory;

    protected $fillable = [ 'id', 'usuarioid' , 'productoid', 'cantidad', 'fecha' ];
}
