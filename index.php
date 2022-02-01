<?php

namespace App;

session_start();

require_once('vendor/autoload.php');

use Router\Router;
$router = new Router($_GET['url']);

$router->get("/", "App\Controller\AppController@index");

$router->run();