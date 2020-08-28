<?php
// DIC configuration

$container = $app->getContainer();

$container['notFoundHandler'] = function ($c) {
    return function ($request, $response) use ($c) {
        $c->view->render($response, '404');
        return $response->withStatus(404);
    };
};

// monolog
$container['logger'] = function ($c) {
    $settings = $c->get('settings')['logger'];
    $logger = new Monolog\Logger($settings['name']);
    $logger->pushProcessor(new Monolog\Processor\UidProcessor());
    $logger->pushHandler(new Monolog\Handler\StreamHandler($settings['path'], $settings['level']));
    return $logger;
};

// view renderer
$container['view'] = function ($c) {
    $settings = $c->get('settings')['renderer'];
    return new \Slim\Views\Blade($settings['template_path'], $settings['cache_path']);
};

//Base de Datos
$container['db'] = function ($c) {
    $settings = $c->get('settings')['db'];
    $database = new \Medoo\Medoo($settings);
    //$database = new medoo($settings);
    return $database;
};

//PDF
$container['pdf'] = function ($c) {
    return new \Mpdf\Mpdf();
};


//Controller de usuarios
$container['UserController'] = function($c){
  return new \App\Controllers\UserController($c);
};

$container['NivelesController'] = function($c){
  return new \App\Controllers\NivelesController($c);
};

$container['CuestionarioController'] = function($c){
  return new \App\Controllers\CuestionarioController($c);
};

$container['AuthController'] = function($c){
  return new \App\Controllers\Auth\AuthController($c);
};

$container['AdminController'] = function($c){
  return new \App\Controllers\Admin\AdminController($c);
};


$container['validator'] = function($c){
  return new App\Validation\Validator($c);
};

$container['auth'] = function($c){
  return new App\Auth\Auth($c);
};
