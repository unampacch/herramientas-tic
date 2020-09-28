<?php
$container->set('settings', function () {
    return [
        'displayErrorDetails' => true, //poner false en produccion
        'LogErrorDetails' => true,
        'logErrors' => true,
        'app' => [
            'name' => getenv('APP_NAME')
        ],
        'views' => [
            'path' => __DIR__ .'/src/Views',
            'settings' => [
                'cache'=> false,
                //'cache' => __DIR__ . '/../cache', //Activar en produccion
            ],
        ],
        'authExternal' => false,
    ];
});
