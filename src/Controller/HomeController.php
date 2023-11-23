<?php

namespace App\Controller;

class HomeController extends AbstractController
{
    /**
     * Display home page
     */
    public function home(): string
    {
        return $this->twig->render('/home.html.twig');
    }
}
