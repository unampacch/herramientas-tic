<?php
namespace App\Controllers;

use App\Models\Usuarios;
use App\Models\Cuestionario;
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;

class CuestionarioController extends BaseController{
    public function show($request, $response){

        if(!$this->auth->check()){
            $this->flash->addMessage('error', $this->mensaje);
            return $response->withHeader('Location', $this->router->urlFor('home'));
        }

        return $this->view->render($response,'/sections/cuestionario.twig');
    }

    public function guardaRespuesta(Request $request, Response $response): Response {

        $preguntas = $request->getParsedBody();


        if ( count($preguntas) < 9 ) {
            $this->flash->addMessage('error', "Debes de contestar todas las preguntas");
        }elseif ( count($preguntas) == 9 ){
            $this->flash->addMessage('success', "Tus respuestas han sido guardadas con exito");
            Cuestionario::registro($this->session->id, $preguntas);
        }

        return $response->withHeader('Location', $this->router->urlFor('cuestionario'));

    }
}
