<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HobbiesController extends AbstractController
{
    #[Route('/hobbies', name: 'app_hobbies')]
    public function index(): Response
    {
        return $this->render('hobbies/index.html.twig');
    }
}
