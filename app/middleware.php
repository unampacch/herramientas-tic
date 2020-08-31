<?php

use Selective\BasePath\BasePathMiddleware;

$setting = $app->getContainer()->get('settings');

$app->addErrorMiddleware(
    $setting['displayErrorDetails'],
    $setting['LogErrorDetails'],
    $setting['logErrors']
);

$app->add(new \App\Middleware\CsrfViewMiddleware($container));

$app->add(
  new \Slim\Middleware\Session([
    'name' => 'htic_session',
    'autorefresh' => true,
    'lifetime' => '1 hour',
  ])
);

//$app->add(TwigMiddleware::createFromContainer($app));

//$app->add(new \App\Middleware\ValidationErrorsMiddleware($container));
//$app->add(new \App\Middleware\OldInputMiddleware($container));
