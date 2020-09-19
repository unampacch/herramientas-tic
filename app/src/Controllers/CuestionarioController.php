<?php
namespace App\Controllers;

use App\Models\Usuarios;
use App\Models\Cuestionario;
use App\Models\Avance;
use App\Models\Logs;
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;

class CuestionarioController extends BaseController{
    public function show($request, $response){

        if(!$this->auth->check()){
            $this->flash->addMessage('error', "Primero debes ingresar para ver el contenido.");
            return $response->withHeader('Location', $this->router->urlFor('home'));
        }
        if ( Cuestionario::respondio($this->session->id) ){
            $this->flash->addMessage('success', "Ya has contestado el cuestionario de opinión anteriormente, no es necesario contestarlo de nuevo.");
            return $response->withHeader('Location', $this->router->urlFor('niveles'));
        }

        Logs::registra_log( $this->session->id, 'View', '/cuestionario' );

        return $this->view->render($response,'/sections/cuestionario.twig');
    }

    public function guardaRespuesta(Request $request, Response $response): Response {

        $preguntas = $request->getParsedBody();


        if ( count($preguntas) < 9 ) {
            $this->flash->addMessage('error', "Debes de contestar todas las preguntas");
            return $response->withHeader('Location', $this->router->urlFor('cuestionario'));
        }elseif ( count($preguntas) == 9 ){
            $this->flash->addMessage('success', "Tus respuestas han sido guardadas con éxito, gracias por tu opinión.");
            Cuestionario::registro($this->session->id, $preguntas);
            Avance::registro($this->session->id, 5);
        }

        return $response->withHeader('Location', $this->router->urlFor('niveles'));

    }
}
