<?php

namespace App\Controllers\Auth;

use App\Controllers\BaseController;
use App\Model\UsersModel;
use App\Model\LogsModel;
use Respect\Validation\Validator as v;


Class AuthController extends BaseController{



    public function getEntrar($request, $response){
        if(!$this->auth->checkLogin()){
            return $this->view->render($response,'sections/index');
        }else{
            return $response->withRedirect($this->router->pathFor('niveles'));
        }
    }

    public function postEntrar($request, $response){

        $validation = $this->validator->validate($request,[
            'user'    => v::noWhitespace()->notEmpty(),
            'password' => v::noWhitespace()->notEmpty(),
        ]);

        /*if($validation->failed()){
            return $response->withRedirect($this->router->pathFor('inicio.post'));
        }*/

        $auth = $this->auth->attempt(
                $request->getParam('user'),
                $request->getParam('password')
        );


        if(!$auth){
            $error = "has-error";
            //return $response->withRedirect($this->router->pathFor('inicio'));
            return $this->view->render($response,'sections/index',compact('error'));
        }

        $usuario = $_SESSION['id'];

        $logs = new LogsModel($this->container);

        $logs->insert([
            'Usuarios_id' => $usuario,
            'Accion'      => 'Inicio',
            'URL'         => '/',
        ]);

        return $response->withRedirect($this->router->pathFor('niveles'));
    }



    public function getSignUp($request, $response){

        return $this->view->render($response,'sections/login');
        //return $response->withRedirect($this->router->pathFor('niveles'));
    }

    /*
    * Funcion para dar de alta nuevo usuarios
    */
    public function postSignUp($request, $response){

        //$parametros = $request->getParams();

        $validation = $this->validator->validate($request,[
            'user'    => v::noWhitespace()->notEmpty(),
            'email'    => v::noWhitespace()->notEmpty(),
            'name'     => v::noWhitespace()->alpha(),
            'password' => v::noWhitespace()->notEmpty(),
        ]);

        if($validation->failed()){
            //redirect back;
            return $response->withRedirect($this->router->pathFor('login'));
        }

        $user = new UsersModel($this->container);

        $user->insert([
            'user'     => $request->getParam('user'),
            'email'    => $request->getParam('email'),
            'name'    => $request->getParam('name'),
            //'password' => password_hash( $request->getParam('password'), PASSWORD_DEFAULT,['cost'=>10] ),
            'password' => password_hash( $request->getParam('password'), PASSWORD_DEFAULT),
        ]);

        return $response->withRedirect($this->router->pathFor('registro'));
    }

    public function logOut($request, $response){

        $usuario = $_SESSION['id'];

        $logs = new LogsModel($this->container);

        $logs->insert([
            'Usuarios_id' => $usuario,
            'Accion'      => 'Salir',
            'URL'         => '/',
        ]);

        $_SESSION = array();

        // Si se desea destruir la sesión completamente, borre también la cookie de sesión.
        // Nota: ¡Esto destruirá la sesión, y no la información de la sesión!
        if (ini_get("session.use_cookies")) {
            $params = session_get_cookie_params();
            setcookie(session_name(), '', time() - 42000,
                $params["path"], $params["domain"],
                $params["secure"], $params["httponly"]
            );
        }

        // Finalmente, destruir la sesión.
        session_destroy();

        return $response->withRedirect($this->router->pathFor('inicio'));
    }
}
