<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    #[Route('/', name: 'home')]
    public function index(): Response
    {
        return $this->render('home.html.twig');
    }

    #[Route('/infos', name: 'infos')]
    public function infos(): Response
    {
        return $this->render('infos.html.twig');
    }

    #[Route('/passions', name: 'passions')]
    public function passions(): Response
    {
        return $this->render('passions.html.twig');
    }
}
