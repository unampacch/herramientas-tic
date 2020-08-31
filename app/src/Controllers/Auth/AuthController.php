<?php

namespace App\Controllers\Auth;

//use App\Models\User;
use App\Controllers\BaseController;
use Respect\Validation\Validator as v;

class AuthController extends BaseController {

	public function getSignOut($request, $response) {
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

        return $response->withHeader('Location', $this->router->urlFor('niveles'));
	}

}
