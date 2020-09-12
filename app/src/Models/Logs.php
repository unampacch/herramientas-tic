<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Logs extends Model {

    protected $table = 'Logs';
    protected $fillable = ['Usuarios_Id', 'Accion', 'Tiempo', 'Url'];
    protected $guarded = ['Id'];
    public $timestamps = false;

        public static function registra_log($id, $accion, $url) {

        $log = static::create([
            'Usuarios_Id' => $id,
            'Accion' => $accion,
            'Tiempo' => date("Y-m-d H:i:s"),
            'Url' => $url,
        ]);

        $log->save();
    }
}
