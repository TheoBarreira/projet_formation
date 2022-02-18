<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class NintendoController extends AbstractController
{
    #[Route('/nintendo', name: 'nintendo')]
    public function index(): Response
    {
        return $this->render('nintendo/index.html.twig', [
            'controller_name' => 'NintendoController',
        ]);
    }
}
