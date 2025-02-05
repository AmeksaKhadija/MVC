<?php

include './APP/Controllers/HomeController.php';
include './APP/Router.php';

$router = new Router();

$router->get('/', HomeController::class, 'index');

$router->dispatch();