<?php
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Slim\App;
use App\Controllers\InicioController;
use App\Controllers\HomeController;
use App\Controllers\NivelesController;
use App\Controllers\CuestionarioController;
use App\Controllers\Auth\AuthController;



$app->get('/', InicioController::class.':home')->setName('home');

$app->post('/auth/signin', AuthController::class . ':postSignIn');
$app->get('/salir', AuthController::class . ':getSignOut');

$app->get('/niveles', NivelesController::class . ':show')->setName('niveles');

$app->group('/niveles', function ($group) {
  $group->get('/cuenta-cch', NivelesController::class . ':showCuentaCCH');
  $group->get('/navega-seguro', NivelesController::class . ':showNavegaSeguro');
  $group->get('/organizate', NivelesController::class . ':showOrganizate');
  $group->get('/busqueda', NivelesController::class . ':showBusqueda');
});

$app->get('/cuestionario', CuestionarioController::class . ':show')->setName('cuestionario');
$app->post('/cuestionario', CuestionarioController::class . ':guardaRespuesta');
