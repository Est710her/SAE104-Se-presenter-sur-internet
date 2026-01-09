<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Mime\Email;
use Symfony\Component\Mailer\MailerInterface;

class HomeController extends AbstractController
{
    #[Route('/', name: 'app_home')]
    public function index(Request $request, MailerInterface $mailer): Response
    {
        // Vérifier si le formulaire est soumis
        if ($request->isMethod('POST')) {
            $name = $request->request->get('name');
            $email = $request->request->get('email');
            $messageContent = $request->request->get('message');

            if ($name && $email && $messageContent) {
                $emailMessage = (new Email())
                    ->from($email) // l'adresse de la personne
                    ->to('djustesther@gmail.com') // ton adresse
                    ->subject('Nouveau message de contact de ' . $name)
                    ->text("Nom: $name\nEmail: $email\nMessage:\n$messageContent");

                $mailer->send($emailMessage);

                $this->addFlash('success', 'Votre message a été envoyé avec succès !');
                return $this->redirectToRoute('app_home');
            } else {
                $this->addFlash('error', 'Merci de remplir tous les champs.');
            }
        }

        return $this->render('home/index.html.twig');
    }
}
