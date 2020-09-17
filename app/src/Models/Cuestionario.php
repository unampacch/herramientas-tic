<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cuestionario extends Model {

    protected $table = 'Cuestionario';
    protected $fillable = ['Usuarios_Id', 'P1', 'P2', 'P3','P4','P5','P6','P7','P8','P9'];
    protected $guarded = ['Id'];
    public $timestamps = false;

    public static function registro($id, $respuestas) {

        $respuesta = static::create([
            'Usuarios_Id' => $id,
            'P1' => $respuestas['p1'],
            'P2' => $respuestas['p2'],
            'P3' => $respuestas['p3'],
            'P4' => $respuestas['p4'],
            'P5' => $respuestas['p5'],
            'P6' => $respuestas['p6'],
            'P7' => $respuestas['p7'],
            'P8' => $respuestas['p8'],
            'P9' => $respuestas['p9'],
        ]);

        $respuesta->save();
    }

    public static function respondio($id){
        return static::where('Usuarios_Id', $id)->exists();
    }
}
