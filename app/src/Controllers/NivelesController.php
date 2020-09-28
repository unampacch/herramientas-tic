<?php
namespace App\Controllers;

use App\Models\Usuarios;
use App\Models\Avance;
use App\Models\Logs;

class NivelesController extends BaseController{
    private $mensaje = 'Primero debes ingresar para ver el contenido';

    public function show($request, $response){

        if(!isset($_COOKIE['firstmodal_'.$this->session->id])){
            setcookie('firstmodal_'.$this->session->id, 1, time() + 365 * 24 * 60 * 60);
        }

        if(!$this->auth->check()){
            $this->flash->addMessage('error', $this->mensaje);
            return $response->withHeader('Location', $this->router->urlFor('home'));
        }

        Logs::registra_log( $this->session->id, 'View', '/niveles' );

        return $this->view->render($response,'/sections/niveles.twig');
    }

    public function showCuentaCCH($request, $response){
        if(!$this->auth->check()){
            $this->flash->addMessage('error', $this->mensaje);
            return $response->withHeader('Location', $this->router->urlFor('home'));
        }

        Avance::registro($this->session->id, 1);
        Logs::registra_log( $this->session->id, 'View', '/niveles/cuenta-cch' );

        return $this->view->render($response,'/sections/levels/cuenta-cch.twig');
    }

    public function showNavegaSeguro($request, $response){
        if(!$this->auth->check()){
            $this->flash->addMessage('error', $this->mensaje);
            return $response->withHeader('Location', $this->router->urlFor('home'));
        }

        Avance::registro($this->session->id, 2);
        Logs::registra_log( $this->session->id, 'View', '/niveles/navega-seguro' );

        return $this->view->render($response,'/sections/levels/navega-seguro.twig');
    }

    public function showBusqueda($request, $response){
        if(!$this->auth->check()){
            $this->flash->addMessage('error', $this->mensaje);
            return $response->withHeader('Location', $this->router->urlFor('home'));
        }

        Avance::registro($this->session->id, 3);
        Logs::registra_log( $this->session->id, 'View', '/niveles/busqueda' );

        return $this->view->render($response,'/sections/levels/busqueda.twig');
    }

    public function showOrganizate($request, $response){
        if(!$this->auth->check()){
            $this->flash->addMessage('error', $this->mensaje);
            return $response->withHeader('Location', $this->router->urlFor('home'));
        }

        Avance::registro($this->session->id, 4);
        Logs::registra_log( $this->session->id, 'View', '/niveles/organizate' );

        return $this->view->render($response,'/sections/levels/organizate.twig');
    }

}
