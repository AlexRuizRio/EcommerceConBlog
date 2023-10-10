<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class deseos extends Model
{
    use HasFactory;
    protected $fillable = [ 'id', 'usuarioid' , 'productoid',  'fecha' ];
}
