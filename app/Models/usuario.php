<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    use HasFactory;
    protected $fillable = [
        'nombre',
        'email',
        'password',
        'telefono','apellidos','fecha_nac', 'rol',
        'direccion', 'localidad', 'provincia', 'pais','cp'
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];
}
