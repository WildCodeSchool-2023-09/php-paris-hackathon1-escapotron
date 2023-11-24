<?php

namespace App\Controller;

use App\Model\ExcuseManager;

class PageController extends AbstractController
{

    private ExcuseManager $excuseManager;

    public function __construct()
    {
        parent::__construct();
        $excuseManager = new ExcuseManager();
    }

    /**
     * Display home page
     */
    public function index(): string
    {
        return $this->twig->render('index.html.twig');
    }

    public function app(): string
    {
        return $this->twig->render('escape.html.twig');
    }

    public function explication(): string
    {
        return $this->twig->render('/infos.html.twig');
    }

    public function showResult(string $fete, string $gens, string $raison, string $ton)
    {
        $excuseManager = new ExcuseManager();
        $excuseParfaite = $excuseManager->generateur($fete, $gens, $raison, $ton);
        
        return $this->twig->render('result.html.twig', ['excuseParfaite' => $excuseParfaite]);
    }
}
