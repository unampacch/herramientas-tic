<?php

namespace App\Controllers\Auth;

use DI\Container;
use App\Controllers\BaseController;
use Respect\Validation\Validator as v;
use App\Models\Logs;
use App\Models\Usuarios;
use PDO;

class AuthController extends BaseController {

	public function getSignOut($request, $response) {
		Logs::registra_log( $this->session->id, 'Logout', '/' );
        $this->auth->logout();
		return $response->withHeader('Location', $this->router->urlFor('home'));
	}

	public function postSignIn($request, $response) {
		$data = $request->getParsedBody();
        $username = $data['username'];
        $password = $data['password'];

        if( empty($username) || empty($password)){
            $this->flash->addMessage('error', 'Debes de llenar los campos de usuario y contraseña');
            return $response->withHeader('Location', $this->router->urlFor('home'));
        }

		$auth = $this->auth->attempt(
			$username,
			$password
		);

        //Si fallo autenticacion, validamos que exista, si existe envia mensaje
        // En caso de que no, busca el usuario en BD externa y lo Agrega
    	if (!$auth) {

            $user = Usuarios::where('Usuario', $username)->first();

            if (!$user) {
                //Si externo esta activado, buscamos el usuarop en la base de datos externa
                //$exteno = $this->get('settings')['authExternal'];
                $externo = true;

                if ( $externo ){

                    $pdo = $this->edb->connect();

                    $consulta = $pdo->prepare("SELECT * FROM moodle WHERE username =:usuario AND password =:password");
                    $consulta->bindParam(":usuario", $username);
                    $consulta->bindParam(":password", $password);
                    $consulta->execute();
                    $resultado = $consulta->fetchAll(PDO::FETCH_OBJ);

                    if($consulta->rowCount() > 0){
                        Usuarios::inserta_ext($resultado);
                        $user = Usuarios::where('Usuario', $username)->first();
                        $this->session->id = $user->Id;

                        //Cerramos conexiones a la base de datos
                        $consulta = null;
                        $pdo  = null;

                        Logs::registra_log( $this->session->id, 'Login', '/' );

                        return $response->withHeader('Location', $this->router->urlFor('niveles'));
                    }

                    //Cerramos conexiones a la base de datos
                    $consulta = null;
                    $pdo  = null;
                }
            }

			$this->flash->addMessage('error', 'Tu usuario o contraseña son incorrectos');
            return $response->withHeader('Location', $this->router->urlFor('home'));
		}

        Logs::registra_log( $this->session->id, 'Login', '/' );

        return $response->withHeader('Location', $this->router->urlFor('niveles'));
	}

}
