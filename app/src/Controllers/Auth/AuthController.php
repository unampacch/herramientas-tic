<?php

namespace App\Controllers\Auth;

//use App\Models\User;
use App\Controllers\BaseController;
use Respect\Validation\Validator as v;
use App\Models\Logs;

class AuthController extends BaseController {

	public function getSignOut($request, $response) {
		Logs::registra_log( $this->session->id, 'Logout', '/' );
        $this->auth->logout();
		return $response->withHeader('Location', $this->router->urlFor('home'));
	}

	public function postSignIn($request, $response) {
		$data = $request->getParsedBody();

		$auth = $this->auth->attempt(
			$data['username'],
			$data['password']
		);

    	if (! $auth) {
			$this->flash->addMessage('error', 'Tu usuario o contraseña son incorrectos');
            return $response->withHeader('Location', $this->router->urlFor('home'));
		}

        Logs::registra_log( $this->session->id, 'Login', '/' );

        return $response->withHeader('Location', $this->router->urlFor('niveles'));
	}

}
