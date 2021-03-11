<?php

namespace App\Controllers;

//DAO usado para testes...
//use App\DAO\MySQL\GerenciadorDeLojas\LojasDAO; 

use Psr\Http\Message\ServerRequestInterface as Request;
use Psr\Http\Message\ResponseInterface as Response;

final class ProdutoController 
{
    //public function getProducts(Request $request, Response $response, array $args): Response
    //{
        // teste para ver se estava funcionando (feito no início do projeto)
        //$response->getBody()->write("Hello World!");

        //$response = $response->withJson([
        //    "message" => "Hello World!!!"
        //]);

        // teste p/ ver ser está acessando o bando de dados...
        // ---------------------------------------------------
        // $lojasDAO = new LojasDAO();
        // $lojasDAO->teste();

    //    return $response;


    public function getProdutos(Request $request, Response $response, array $args): Response
    {
     
        return $response;
    }

    public function insertProdutos(Request $request, Response $response, array $args): Response
    {

        return $response;
    }

    public function updateProdutos(Request $request, Response $response, array $args): Response
    {

        return $response;
    }    

    public function deleteProdutos(Request $request, Response $response, array $args): Response
    {

        return $response;
    }    

}    