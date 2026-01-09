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
                'text' => 'Les compétences acquises en R102, R103 et SAÉ102 m’ont permis de configurer des switchs, d’adapter mes branchements et de concevoir des réseaux Internet.'
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
    public function programmer(): Response
    {
        $items = [
            [
                'image' => '/images/prog1.jpg',
                'text' => 'À travers de nombreux TP et un projet en R107, j’ai développé mes connaissances en programmation afin de résoudre diverses situations.'
            ],
            [
                'image' => '/images/prog2.jpg',
                'text' => 'Les bases apprises en R109 et lors de la SAÉ104 m’ont permis de maîtriser l’environnement CSS et HTML, savoir résoudre mes erreurs et concevoir un site web.'
            ],
        ];

        return $this->render('portfolio/detail.html.twig', [
            'title' => 'Programmer',
            'description' => 'Développer des applications et scripts pour automatiser.',
            'items' => $items
        ]);
    }
}

