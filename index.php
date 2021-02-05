<?php

use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;

require_once "vendor/autoload.php";

$app = new \Slim\App();

$app->get('/produtos[/{nome}]', function(Request $request, Response $response, array $args) {
    $limit = $request->getQueryParams()['limit'] ?? 25;
    $nome = $args['nome']  ?? 'mouse';

    return $response->getBody()->write("{$limit} produtos do banco de dados com o nome {$nome}!");
});

$app->run();