<?php
use Slim\Views\Twig;
use Slim\Views\TwigExtension;
use Slim\Views\TwigRuntimeLoader;
use Slim\Views\TwigMiddleware;
use Slim\Psr7\Factory\UriFactory;
use Slim\Csrf\Guard;
use Slim\Handlers\Strategies\RequestResponseArgs;
use App\Models\Cuestionario;


$container->set('db', function () use ($capsule) {
	return $capsule;
});

$container->set('router', function () use ($routeParser) {
    return $routeParser;
});

$container->set('session', function () {
  return new \SlimSession\Helper();
});

$container->set('auth', function () {
	return new \App\Auth\Auth;
});

$container->set('flash', function() {
	return new \Slim\Flash\Messages;
});

$container->set('view', function ($container) use ($app) {

    $setting = $app->getContainer()->get('settings');
    $view = Twig::create($setting['views']['path'], $setting['views']['settings']);

    $runtimeLoader = new TwigRuntimeLoader(
        $app->getRouteCollector()->getRouteParser(),
        (new UriFactory)->createFromGlobals($_SERVER),
        '/'
    );

    $view->addRuntimeLoader($runtimeLoader);

    $view->addExtension(new TwigExtension(
        $app->getRouteCollector()->getRouteParser(),
        $app->getBasePath()
    ));

    $view->getEnvironment()->addGlobal('auth', [
        'check' => $container->get('auth')->check(),
        'user' => $container->get('auth')->user()
    ]);

    $view->getEnvironment()->addGlobal('flash', $container->get('flash'));

    $view->getEnvironment()->addGlobal('modal', $container->get('auth')->firstModal());

    $view->getEnvironment()->addGlobal('respondio',Cuestionario::respondio($container->get('session')->id));

	return $view;
});

$container->set('csrf', function($container) use ($responseFactory) {
	return new Guard($responseFactory);
});
