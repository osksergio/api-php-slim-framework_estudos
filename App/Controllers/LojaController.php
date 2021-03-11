<?php

namespace App\Controllers;

use Psr\Http\Message\ServerRequestInterface as Request;
use Psr\Http\Message\ResponseInterface as Response;

final class LojaController
{
    public function getLojas(Request $request, Response $response, array $args): Response
    {
        $response = $response->withJson([
           "message" => "Hello World"
        ]);
        return $response;
    }

    public function insertLojas(Request $request, Response $response, array $args):Response
    {
        
        return $response;
    }
    
    public function updateLojas(Request $request, Response $response, array $args): Response
    {
        
        return $response;
    } 
    
    public function deleteLojas(Request $request, Response $response, array $args): Response
    {
        
        return $response;
    }    
}