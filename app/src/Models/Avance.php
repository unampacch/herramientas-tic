<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Avance extends Model {

    protected $table = 'Avance';
    //protected $primaryKey = 'Id';
    protected $attributes = [
        'N1' => 0,
        'N2' => 0,
        'N3' => 0,
        'N4' => 0,
        'Cuestionario' => 0,
    ];

    protected $fillable = ['Usuarios_Id', 'N1', 'N2', 'N3', 'N4', 'Cuestionario'];
    //protected $guarded = ['Id'];

    const CREATED_AT = 'Fecha_creacion';
    const UPDATED_AT = 'Ultima_actualizacion';

    public static function registro($id, $nivel) {

        $user = static::where('Usuarios_Id', $id)->first();
        $consulta = 1;

        //echo $user;
        switch ($nivel) {
            case 1:

                if ( $user->N1 == 1 ) {
                    break;
                }

                $consulta = static::updateOrInsert(
                    ['Usuarios_Id' => $id, 'N1' => 0],
                    [
                        'Usuarios_Id' => $id,
                        'N1' => 1
                    ]
                );
                break;
            case 2:

                if ( $user->N2 == 1){
                    break;
                }
                $consulta = static::updateOrInsert(
                    ['Usuarios_Id' => $id, 'N2' => 0],
                    [
                        'Usuarios_Id' => $id,
                        'N2' => 1
                    ]
                );
                break;
            case 3:
                if ( $user->N3 == 1){
                    break;
                }
                $consulta = static::updateOrInsert(
                    ['Usuarios_Id' => $id, 'N3' => 0],
                    [
                        'Usuarios_Id' => $id,
                        'N3' => 1
                    ]
                );
                break;
            case 4:
                if ( $user->N4 == 1){
                    break;
                }
                $consulta = static::updateOrInsert(
                    ['Usuarios_Id' => $id, 'N4' => 0],
                    [
                        'Usuarios_Id' => $id,
                        'N4' => 1
                    ]
                );
                break;
            case 5:
                if ( $user->Cuestionario == 1){
                    break;
                }
                $consulta = static::updateOrInsert(
                    ['Usuarios_Id' => $id],
                    [
                        'Usuarios_Id' => $id,
                        'Cuestionario' => 1
                    ]
                );
                break;
        }

        return $consulta;

    }

}
