<?php

namespace App\Middleware;


class ValidationErrorsMiddleware extends BaseMiddleware{
    public function __invoke($request, $response, $next){
        //var_dump('middleware');

        //$this->container->view->getEnvironment()->addGlobal('errors',$_SESSION['errors']);
        $this->container->view->set('errors',$_SESSION['errors']);

        unset($_SESSION['errors']);

        $response = $next($request, $response);

        return $response;
    }
}
