<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class VoituresController extends AbstractController
{
    #[Route('/', name: 'app_voitures')]
    public function index(): Response
    {
        return $this->render('accueil.html.twig', [
            'controller_name' => 'VoituresController',
        ]);
    }

    #[Route('/', name: 'app_car')]
    public function voiture(): Response
    {
        return $this->render('car.html.twig', [
            'controller_name' => 'VoituresController',
        ]);
    }
}
