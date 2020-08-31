<?php
namespace App\Controllers;

use App\Models\Usuarios;
use App\Models\Avance;

class NivelesController extends BaseController{
    private $mensaje = 'Primero debes ingresar para ver el contenido';

    public function show($request, $response){

        if(!$this->auth->check()){
            $this->flash->addMessage('error', $this->mensaje);
            return $response->withHeader('Location', $this->router->urlFor('home'));
        }

        return $this->view->render($response,'/sections/niveles.twig');
    }

    public function showCuentaCCH($request, $response){
        if(!$this->auth->check()){
            $this->flash->addMessage('error', $this->mensaje);
            return $response->withHeader('Location', $this->router->urlFor('home'));
        }

        Avance::registro($this->session->id, 1);
        return $this->view->render($response,'/sections/levels/cuenta-cch.twig');
    }

    public function showNavegaSeguro($request, $response){
        if(!$this->auth->check()){
            $this->flash->addMessage('error', $this->mensaje);
            return $response->withHeader('Location', $this->router->urlFor('home'));
        }

        Avance::registro($this->session->id, 2);
        return $this->view->render($response,'/sections/levels/navega-seguro.twig');
    }

    public function showBusqueda($request, $response){
        if(!$this->auth->check()){
            $this->flash->addMessage('error', $this->mensaje);
            return $response->withHeader('Location', $this->router->urlFor('home'));
        }

        Avance::registro($this->session->id, 3);
        return $this->view->render($response,'/sections/levels/busqueda.twig');
    }

    public function showOrganizate($request, $response){
        if(!$this->auth->check()){
            $this->flash->addMessage('error', $this->mensaje);
            return $response->withHeader('Location', $this->router->urlFor('home'));
        }

        Avance::registro($this->session->id, 4);
        return $this->view->render($response,'/sections/levels/organizate.twig');
    }
}
