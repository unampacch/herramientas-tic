<?php

namespace App\Controllers;

use App\Model\LogsModel;
use App\Model\CuestionarioModel;
use App\Model\ClavesModel;


Class CuestionarioController extends BaseController{
    public function show( $request,  $response,  $args){

        $usuario = $_SESSION['id'];

        $logs = new LogsModel($this->container);

        if(!$this->auth->checkLogin()){
            return $response->withRedirect($this->router->pathFor('inicio'));
        }

        $busca = new CuestionarioModel($this->container);

        $existe=$busca->exists($_SESSION['id']);

        if( $existe[0] == 0){

            $logs->insert([
                'Usuarios_id' => $usuario,
                'Accion'      => 'Vista',
                'Url'         => '/cuestionario'
            ]);
            return $this->view->render($response, 'sections/cuestionario');
        }else{
            return $response->withRedirect($this->router->pathFor('niveles'));
        }
    }

    public function postForm($request, $response){

        $usuario = $_SESSION['id'];
        $cuenta  = $_SESSION['user'];

        $preguntas = array(
            $request->getParam('p1'),
            $request->getParam('p2'),
            $request->getParam('p3'),
            $request->getParam('p4'),
            $request->getParam('p5'),
            $request->getParam('p6'),
            $request->getParam('p7'),
            $request->getParam('p8'),
            $request->getParam('p9')
        );

        if (in_array(0, $preguntas)) {
            $error = 1;
            return $this->view->render($response, 'sections/cuestionario',compact('error'));
        }else{
            $respuesta = new CuestionarioModel($this->container);
            $claves = new ClavesModel($this->container);

            $respuesta->insert([
                'Usuarios_id'     => $usuario,
                'p1'    => $preguntas[0],
                'p2'    => $preguntas[1],
                'p3'    => $preguntas[2],
                'p4'    => $preguntas[3],
                'p5'    => $preguntas[4],
                'p6'    => $preguntas[5],
                'p7'    => $preguntas[6],
                'p8'    => $preguntas[7],
                'p9'    => $preguntas[8],
            ]);

            $clave = $claves->obtenerClave($cuenta);
        }

        return $response->withRedirect($this->router->pathFor('final',[
            'clave'=>$clave[0]
        ]));
    }

    public function showFinal($request, $response, $args){

        $usuario = $_SESSION['id'];
        $logs = new LogsModel($this->container);

        $logs->insert([
            'Usuarios_id' => $usuario,
            'Accion'      => 'Vista',
            'Url'         => '/final'
        ]);

        if(isset($args['clave'])){
            $clave = $args['clave'];
            return $this->view->render($response, 'sections/final',compact('clave'));
        }

        return $this->view->render($response, 'sections/final');


    }

}
