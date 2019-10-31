<?php

namespace App\Controller;

class IntroController extends AbstractController
{

    public function index()

    {
        session_start();
        session_destroy();
        return $this->twig->render('Intro/index.html.twig');
    }
}
