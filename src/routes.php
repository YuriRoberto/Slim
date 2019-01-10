<?php 

use Psr\Http\Message\ServerRequestInterface as Request;
use Psr\Http\Message\ResponseInterface as Response;


$app->get('/hello', function(){
    return 'Hello world!';
});

$app->get('/hello[/{name}]',function($request, Response $response){
    
    $name = $request->getAttribute('name') ?? 'World';
    $response->getBody()->write("Hello, {$name}");
    
    return $response;
});

