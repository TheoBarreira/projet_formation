<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PlaystationController extends AbstractController
{
    #[Route('/playstation', name: 'playstation')]
    public function index(): Response
    {
        return $this->render('playstation/index.html.twig', [
            'controller_name' => 'PlaystationController',
        ]);
    }
}
