<?php

use Slim\Http\Request;
use Slim\Http\Response;


$app->add(function (Request $request, Response $response, callable $next) {
    $uri = $request->getUri();
    $path = $uri->getPath();
    if ($path != '/' && substr($path, -1) == '/') {
        // permanently redirect paths with a trailing slash
        // to their non-trailing counterpart
        $uri = $uri->withPath(substr($path, 0, -1));

        if($request->getMethod() == 'GET') {
            return $response->withRedirect((string)$uri, 301);
        }
        else {
            return $next($request->withUri($uri), $response);
        }
    }

    return $next($request, $response);
});

$app->get('/', 'AuthController:getEntrar')->setName('inicio');
$app->post('/', 'AuthController:postEntrar')->setName('inicio.post');

$app->get('/niveles[/{nivel}]', 'NivelesController:show')->setName('niveles');
$app->post('/niveles/organizate', 'NivelesController:showCuest');
//$app->get('/niveles/{nivel}', 'NivelesController:show')->setName('niveles.nivel');


$app->get('/prueba', 'UserController:show')->setName('prueba');

$app->get('/users', 'UserController:users')->setName('users');

$app->get('/login', 'AuthController:getSignUp')->setname('registro')->add(new \App\Middleware\ValidationErrorsMiddleware($container));
$app->post('/login', 'AuthController:postSignUp')->setname('registro.post');

$app->get('/salir', 'AuthController:logOut')->setname('salir');

$app->get('/auth/entrar', 'AuthController:getEntrar')->setName('entrar.get')->add(new \App\Middleware\ValidationErrorsMiddleware($container));
$app->post('/auth/entrar', 'AuthController:postEntrar')->setName('entrar.post');

$app->get('/cuestionario', 'CuestionarioController:show')->setname('cuestionario');
$app->post('/cuestionario', 'CuestionarioController:postForm')->setname('cuestionario.post');

$app->get('/final[/{clave}]', 'CuestionarioController:showFinal')->setname('final');

/*$app->get('/final', function (Request $request, Response $response) {
  return $this->view->render($response,'sections/final',compact('clave'));
})->setName('final');*/

/************************
  Seccion Administrativa
*************************/
$app->get('/admin', function (Request $request, Response $response) {
  return $this->view->render($response,'admin/login');
})->setname('admin');
$app->get('/admin/backend', 'AdminController:showBackend');
$app->get('/admin/backend/buscar[/{cuenta}]', 'AdminController:buscaAlumno');
$app->get('/admin/backend/descargar-listas', 'AdminController:descargarListas');
