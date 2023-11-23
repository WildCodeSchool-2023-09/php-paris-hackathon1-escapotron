<?php

namespace App\Controller;

class PageController extends AbstractController
{
    /**
     * Display home page
     */
    public function home(): string
    {
        return $this->twig->render('/home.html.twig');
    }

    public function event(): string
    {
        return $this->twig->render('/event.html.twig');
    }

    public function explication(): string{
        return $this->twig->render('/explication.html.twig');
    }
}
