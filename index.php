<?php

namespace App;

session_start();

require_once('vendor/autoload.php');

use Router\Router;
$router = new Router($_GET['url']);

// Route acceuil
$router->get("/", "App\Controller\AppController@index");
$router->get("/index", "App\Controller\BookController@indexbook");
// Route ajout livre
$router->get("/addbook", "App\Controller\BookController@showform");
$router->post("/addbook", "App\Controller\BookController@add");
// Route modifier livre
$router->get("/modifybook/:id", "App\Controller\BookController@showedit");
$router->post("/modifybook/:id", "App\Controller\BookController@modify");
// Route supprimer livre
$router->get("/deletebook/:id", "App\Controller\BookController@deleteBook");

$router->get("/addrate/:id", "App\Controller\RateController@showaddrate");
$router->post("/addrate/:id", "App\Controller\RateController@addrate");




$router->run();