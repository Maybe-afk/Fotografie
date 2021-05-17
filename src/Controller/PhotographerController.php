<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PhotographerController extends AbstractController
{
    #[Route('/photographer', name: 'photographer')]
    public function index(): Response
    {
        return $this->render('photographer/photographerPanel.html.twig', [
            'controller_name' => 'PhotographerController',
        ]);
    }
}

