<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Usuarios extends Model {

    protected $table = 'Usuarios';
    protected $fillable = ['Usuario', 'Nombre', 'Apellidos', 'Contrasena', 'Correo', 'Plantel', 'Tipo', 'Generacion'];
    protected $guarded = ['Id'];
    const CREATED_AT = 'Creacion';
    const UPDATED_AT = 'Actualizacion';

    public static function findByUsername($username) {
        return static::where('Usuario', $username)->first();
    }

    public static function inserta_ext($user){

        if( is_array($user) ){
            $user = $user[0];
        }

        $usuario = static::create([
            'Usuario' => $user->username,
            'Nombre' => $user->firstname,
            'Apellidos' => $user->lastname,
            'Contrasena' => $user->password,
            'Correo' => $user->email,
            'Plantel' => $user->plantel,
            'Tipo' => $user->tipo,
            'Generacion' => $user->generacion
        ]);

        $usuario->save();
    }
}
