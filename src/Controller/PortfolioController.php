<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PortfolioController extends AbstractController
{
    #[Route('/portfolio', name: 'app_portfolio')]
    public function index(): Response
    {
        return $this->render('portfolio/index.html.twig');
    }

    #[Route('/administrer', name: 'administrer')]
    public function administrer(): Response
    {
        return $this->render('portfolio/administrer.html.twig', [
            'images' => ['/images/admin1.jpg', '/images/admin2.jpg'],
            'description' => 'Gérer et configurer des systèmes et réseaux.',
        ]);
    }

    #[Route('/connecter', name: 'connecter')]
    public function connecter(): Response
    {
        return $this->render('portfolio/connecter.html.twig', [
            'images' => ['/images/connect1.jpg', '/images/connect2.jpg'],
            'description' => 'Établir et maintenir des connexions réseau fiables.',
        ]);
    }

    #[Route('/programmer', name: 'programmer')]
    public function programmer(): Response
    {
        return $this->render('portfolio/programmer.html.twig', [
            'images' => ['/images/program1.jpg', '/images/program2.jpg'],
            'description' => 'Développer des applications et scripts pour automatiser.',
        ]);
    }
}
