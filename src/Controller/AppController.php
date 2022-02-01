<?php

namespace App\Controller;

use Router\Router;

final class AppController
{

    public function index(): void
    {
        include './src/Vues/home.php';
    }

    public function error404(): void
    {
        Router::redirect("404");
    }
}
