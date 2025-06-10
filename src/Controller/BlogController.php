<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class BlogController extends AbstractController
{
    #[Route('/blog/accueil', name: 'app_accueil')]
    public function accueil() : Response 
    {   
        return $this->render('blog/accueil.html.twig', [
            'controller_name' => 'BlogController',
            'nom' => 'Iloduba',
            'prenom' => 'Kelis',
            'groupe' => 'A2',
        ]);
    }

    #[Route('/blog/loisirs', name: 'app_loisirs')]
    public function loisirs(): Response
    {
        return $this->render('blog/loisirs.html.twig', [
            'controller_name' => 'BlogController',
        ]);
    }

    #[Route('/blog/portfolio', name: 'app_portfolio')]
    public function portfolio(): Response
    {
        return $this->render('blog/portfolio.html.twig', [
            'controller_name' => 'BlogController',
        ]);
    }

    #[Route('/blog/cv', name: 'app_cv')]
    public function cv(): Response
    {
        return $this->render('blog/cv.html.twig', [
            'controller_name' => 'BlogController',
        ]);
    }

    #[Route('/blog/cyber', name: 'app_cyber')]
    public function cyber(): Response
    {
        return $this->render('blog/cyber.html.twig', [
            'controller_name' => 'BlogController',
        ]);
    }
}