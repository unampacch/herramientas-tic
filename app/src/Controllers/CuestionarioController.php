<?php
namespace App\Controllers;

use App\Models\Usuarios;
use App\Models\Cuestionario;

class CuestionarioController extends BaseController{
  public function show($request, $response){
      return $this->view->render($response,'/sections/cuestionario.twig');
  }
}
