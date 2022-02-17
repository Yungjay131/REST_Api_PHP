<?php

#refactoring to use routes and POST for secure communication???
#remember to commit to different branch

use app\controllers\MainController;
use app\Router;

$router = new Router();

$router->get('/', [MainController::class, 'index']);
$router->get('/users', [MainController::class, 'index']);
$router->get('/users/create', [MainController::class, 'create']);
$router->get('/users/update', [MainController::class, 'update']);

$router->post('/users/create', [MainController::class, 'create']);
$router->post('/users/update', [MainController::class, 'update']);
$router->post('/users/delete', [MainController::class, 'delete']);

#to execute the current function
$router->resolve();
