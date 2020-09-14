<?php
namespace App\Controllers;

use App\Models\Usuarios;

class InicioController extends BaseController{
  public function home($request, $response){
      return $this->view->render($response,'home.twig');
  }
  public function end($request, $response){
      return $this->view->render($response,'/sections/final.twig');
  }
}
