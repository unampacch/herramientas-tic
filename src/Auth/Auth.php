<?php

namespace App\Auth;

use App\Model\UsersModel;
use App\Model\LogsModel;


class Auth{

    protected $container;

    public function __construct($container){
        $this->container = $container;
    }

    public function attempt($user, $password){

        $users = new UsersModel($this->container);

        $user = $users->select( array('id','Usuario','Contrasena','Nombre','Apellidos'), [
            'Usuario' => strtoupper($user)
        ]);

        if(!$user){
            return false;
        }

        //$password =  str_replace("/","-",$password);
        $password =  explode("/", $password);
        $password =  $password[2]."-".$password[1]."-".$password[0];


        //if (password_verify($password, $user[0]['password'])){
        if ($password == $user[0]['Contrasena']){

            $_SESSION['id'] = $user[0]['id'];
            $_SESSION['user'] = $user[0]['Usuario'];
            $_SESSION['ingreso'] = true;
            $_SESSION['nombre'] = $user[0]['Nombre']." ".$user[0]['Apellidos'];
            $_SESSION['start'] = time();
	        $_SESSION['expire'] = $_SESSION['start'] + (15 * 60);

            return true;
        }

        $this->container->view->set('errors',$_SESSION['errors']);

        unset($_SESSION['errors']);

        return false;
    }

    public function checkLogin(){
        if (isset($_SESSION['ingreso']) && $_SESSION['ingreso'] == true) {
            $now = time();

            if($now > $_SESSION['expire']) {
                // Destruir todas las variables de sesión.
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

                return false;
            }else{

                $_SESSION['expire'] = time() + (15 * 60);

                return true;
            }
        }
        return false;
    }

}
