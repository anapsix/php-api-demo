<?php

// autoloader for Composer
require '../vendor/autoload.php';

// instanciate Slim
$app = new Slim\App();

// grouping the /api route, see Slim's group() method documentation for more
$app->group('/api', function () use ($app) {

    $data = ['hello', 'world'];

    // api route "test" which just gives back some demo data
    $app->get('/test', function ($request, $response, $args) use ($data) {
        return $response->withJson([
            'say' => $data[0],
            'what' => $data[1]
        ]);
    });
});

$app->run();