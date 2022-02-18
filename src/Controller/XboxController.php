<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class XboxController extends AbstractController
{
    #[Route('/xbox', name: 'xbox')]
    public function index(): Response
    {
        return $this->render('xbox/index.html.twig', [
            'controller_name' => 'XboxController',
        ]);
    }
}
