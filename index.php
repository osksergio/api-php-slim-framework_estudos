<?php

use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;

require_once "vendor/autoload.php";

$app = new \Slim\App();

$app->get('/produtos', function(Request $request, Response $response, array $args) {
    $limit = $request->getQueryParams()['limit'] ?? 15;

    return $response->getBody()->write("{$limit} Produtos do Banco de Dados!");
});

$app->run();