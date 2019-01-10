<?php

require __DIR__.'/vendor/autoload.php';

$app = new \Slim\App;

$app->get('/hello', function(){
    return 'Hello world!';
});

$app->get('/hello/{name}',function($request, $response){
    $name = $request->getAttribute('name');
    $response->getBody()->write("Hello, {$name}");
    
    return $response;
});

$app->run();
