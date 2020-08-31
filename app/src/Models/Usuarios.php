<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Usuarios extends Model {

    protected $table = 'Usuarios';
    public $timestamps = false;

    public static function findByUsername($username) {
        return static::where('Usuario', $username)->first();
    }
}
