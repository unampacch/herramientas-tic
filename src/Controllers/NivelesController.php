<?php

namespace App\Controllers;

use App\Model\LogsModel;
use App\Model\CuestionarioModel;
use App\Model\ClavesModel;


Class NivelesController extends BaseController{
    public function show( $request,  $response,  $args){

        $logs = new LogsModel($this->container);
        $usuario = $_SESSION['id'];
        $nombre  = $_SESSION['nombre'];
        $cuenta  = $_SESSION['user'];
        $secc    = array();
        $secc['cuestionario'] = 1;


        if(!$this->auth->checkLogin()){
            return $response->withRedirect($this->router->pathFor('inicio'));
        }

        $busca = new CuestionarioModel($this->container);
        $claves = new ClavesModel($this->container);

        $existe = $busca->exists($_SESSION['id']);
        $secc['clave']  = $claves->obtenerClave($cuenta);

        if( $existe[0] == 0){
            $secc['cuestionario'] = 0;
        }

        $pagina = "/niveles";

        if(isset($args['nivel'])){
            switch ($args['nivel']) {
                case 'cuenta-cch':
                    $pagina = "/cuenta-cch";
                    //return $this->view->render($response,'sections/cuenta_cch');
                    break;
                case 'navega-seguro':
                    $pagina = "/navega-seguro";
                    //return $this->view->render($response,'sections/navega_seguro');
                    break;
                case 'busqueda':
                    $pagina = "/busqueda";
                    //return $this->view->render($response,'sections/cuenta_cch');
                    break;
                case 'organizate':
                    $pagina = "/organizate";
                    //return $this->view->render($response,'sections/cuenta_cch');
                    break;
            }

            $logs->insert([
                'Usuarios_id' => $usuario,
                'Accion'      => 'Vista',
                'Url'         => '/niveles'.$pagina,
                //'Ip'          => $request->getAttribute('ip_address')
            ]);

            if( $pagina == '/organizate'){
                return $this->view->render($response, 'sections'.$pagina, compact('secc'));
            }else{
                return $this->view->render($response, 'sections'.$pagina, compact('nombre'));
            }
        }


        $logs->insert([
            'Usuarios_id' => $usuario,
            'Accion'      => 'Vista',
            'Url'         => '/niveles',
            //'Ip'          => $request->getAttribute('ip_address')


        ]);

        return $this->view->render(
            $response,
            'sections/niveles',
            compact('nombre')
        );
    }

    public function showCuest($request,  $response){

        $pass  = $request->getParam('contrasena');
        $error = 0;
        $secc['cuestionario'] = 0;

        if( !empty(trim($pass)) ) {
            if($pass == "B13nv3n1d0-2018"){
                //return $this->view->render($response,'sections/cuestionario');
                return $response->withRedirect($this->router->pathFor('cuestionario'));
            }else{
                $error = 2;
                return $this->view->render($response,'sections/organizate',compact('error','secc'));
            }

        }else{
            $error = 1;
            return $this->view->render($response,'sections/organizate',compact('error','secc'));
        }
    }

}
