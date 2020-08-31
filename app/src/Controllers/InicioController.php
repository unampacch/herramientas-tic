<?php
namespace App\Controllers;

use App\Models\Usuarios;

class InicioController extends BaseController{
  public function home($request, $response){
      $session = new \SlimSession\Helper();

      return $this->view->render($response,'home.twig');
  }
}
