<?php

use Slim\Http\Request;
use Slim\Http\Response;

// Routes

$app->get('/hello/[{name}]', function (Request $request, Response $response, array $args) {
    // Sample log message
    $this->logger->info("Slim-Skeleton '/' route");

    // Render index view
    return $this->renderer->render($response, 'index.phtml', $args);
});

$app->get('/users', function (Request $request, Response $response, array $args) {


    $table = $this->db->table('users');
    $users = $table->get();

    // Render index view
    return $this->renderer->render($response, 'users/index.phtml', ['users'=>$users]);
})->add($auth);



$app->post('/users', function (Request $request, Response $response, array $args) {
    
    $data = [
        'name'=>filter_input(INPUT_POST, 'name'),
        'email'=>filter_input(INPUT_POST, 'email'),
        'password'=>filter_input(INPUT_POST, 'password'),
    ];
    

    $table = $this->db->table('users');
    $users = $table->insert($data);

    
    return $response->withStatus(302)->withHeader('Location', '/users');
});


$app->get('/users/{id}', function ($request, $response, $args) {
    $id = $args['id'];

    $table = $this->db->table('users');
    $users = $table->where('id', $id)->delete();

    return $response->withStatus(302)->withHeader('Location', '/users');
})->add($auth);

$app->map(['GET', 'POST'],'/login', function ($request, $response) {
    
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $email = filter_input(INPUT_POST, 'email');
        $password = filter_input(INPUT_POST,'password');

        $this->db->table('users');
        $users = $table->where([
            'email' => $email,
            'password' => $password
        ])->get();

        if($users->count()) {
            $_SESSION['user'] = (array)$users->first();
            return $response->withStatus(302)->withHeader('Location', '/users');

        }

    }

    $this->renderer->render($response, 'login.phtml');
});
