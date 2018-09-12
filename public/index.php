<?php
use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

require 'vendor/autoload.php';

$app = new \Slim\App;
$app->get('/', function (Request $request, Response $response) {

    $archivo = "./hola/archivo.txt";

    $response->getBody()->write(file_get_contents($archivo));

    return $response;
});
$app->run();
