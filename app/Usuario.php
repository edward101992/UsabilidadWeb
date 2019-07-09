<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    protected $table = "usuario";
    protected $primaryKey ="usuario_id";

     protected $fillable = [
        'usuario_nombre', 'usuario_apellido','usuario_telefono',
        'usuario_email','usuario_imagen', 'usuario_password','usuario_estado',
        'rol_id',
    ];

     protected $hidden = [
        'password', 'remember_token',
    ];
}
