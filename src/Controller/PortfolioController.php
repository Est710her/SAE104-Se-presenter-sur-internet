<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PortfolioController extends AbstractController
{
    // Page principale du portfolio
    #[Route('/portfolio', name: 'app_portfolio')]
    public function index(): Response
    {
        return $this->render('portfolio/index.html.twig');
    }

    // Page détaillée Administrer
    #[Route('/administrer', name: 'administrer')]
    public function administrer(): Response
    {
        $items = [
            [
                'image' => '/images/admin1.jpg',
                'text' => 'J’ai appris à configurer un serveur et installer des services essentiels.'
            ],
            [
                'image' => '/images/admin2.jpg',
                'text' => 'J’ai appris à sécuriser le réseau et gérer les utilisateurs efficacement.'
            ],
        ];

        return $this->render('portfolio/detail.html.twig', [
            'title' => 'Administrer',
            'description' => 'Gérer et configurer des systèmes et réseaux.',
            'items' => $items
        ]);
    }

    // Page détaillée Connecter
    #[Route('/connecter', name: 'connecter')]
    public function connecter(): Response
    {
        $items = [
            [
                'image' => '/images/connect1.jpg',
                'text' => 'J’ai appris à établir des connexions réseau stables.'
            ],
            [
                'image' => '/images/connect2.jpg',
                'text' => 'J’ai appris à diagnostiquer et résoudre des problèmes de connexion.'
            ],
        ];

        return $this->render('portfolio/detail.html.twig', [
            'title' => 'Connecter',
            'description' => 'Établir et maintenir des connexions réseau fiables.',
            'items' => $items
        ]);
    }

    // Page détaillée Programmer
    #[Route('/programmer', name: 'programmer')]
    public function prog(): Response
    {
        $items = [
            [
                'image' => '/images/prog1.jpg',
                'text' => 'J’ai appris à coder en Python pour automatiser des tâches.'
            ],
            [
                'image' => '/images/prog2.jpg',
                'text' => 'J’ai appris à créer des scripts et petites applications.'
            ],
        ];

        return $this->render('portfolio/detail.html.twig', [
            'title' => 'Prog',
            'description' => 'Développer des applications et scripts pour automatiser.',
            'items' => $items
        ]);
    }
}

