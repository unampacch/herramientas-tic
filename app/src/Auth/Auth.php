<?php

namespace App\Auth;

use App\Models\Usuarios;
use DI\Container;


class Auth {

    /*protected $container;

	public function __construct(Container $container) {
		$this->container = $container;
	}*/

    public function user(){
        $session = new \SlimSession\Helper();
		$user = Usuarios::find(isset($session->id) ? $session->id : 0);
        //$user = $session->nombre;
        return $user;

	}

	public function check() {
		$session = new \SlimSession\Helper();
		return isset($session->id);
	}

	public function attempt($username, $password) {

		$session = new \SlimSession\Helper();

        $user = Usuarios::where('Usuario', $username)->first();


		if (! $user) {
			return false;
		}


		if ($this->verifica_contrasena($password, $user->Contrasena)) {
			$session->id = $user->Id;
			//$session->nombre  = $user->Nombre." ".$user->Apellidos;
			return true;
		}

        return  false;

	}

	public function logout() {
		$session = new \SlimSession\Helper();
		$session->delete('id');
		$session->delete('nombre');
		$session::destroy();
	}

    private function verifica_contrasena($corigen, $cdestino){
        return $corigen == $cdestino ? true : false;
    }

    public function firstModal(){
        $session = new \SlimSession\Helper();

        if( isset($_COOKIE['firstmodal_'.$session->id]) ) {
            if ( $_COOKIE['firstmodal_'.$session->id] == 1 ) {
                return true;
            }
        }

        return false;
    }
}
