<?php

namespace App\Controller;

use Router\Router;

final class AppController 
{

    public function index(): void
    {
        print("Hello World");
    }

    public function error404(): void
    {
        Router::redirect("404");
    }

}
