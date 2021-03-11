<?php

use App\Controllers\LojaController;
use App\Controllers\ProdutoController;
use function src\slimConfiguration;

$app = new \Slim\App(slimConfiguration());

// ===========================================================================

// abaixo está uma rota de testes --> não será mais utilizada
//$app->get('/', ProductController::class . ':getProducts');

$app->get('/lojas', LojaController::class . ':getLojas');
$app->post('/lojas', LojaController::class . ':insertLojas');
$app->put('/lojas', LojaController::class . ':updateLojas');
$app->delete('/lojas', LojaController::class . 'deleteLojas');

$app->get('/produtos', ProdutoController::class . ':getProdutos');
$app->post('/produtos', ProdutoController::class . ':insertProdutos');
$app->put('/produtos', ProdutoController::class . ':updateProdutos');
$app->delete('/produtos', ProdutoController::class . 'deleteProdutos');

// ===========================================================================

$app->run();