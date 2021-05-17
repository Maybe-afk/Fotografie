<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class serviceProviderController extends AbstractController
{
    #[Route('/serviceProvider', name: 'serviceProvider')]
    public function index(): Response
    {
        return $this->render('serviceProvider/serviceProviderUserPanel.html.twig', [
            'controller_name' => 'serviceProviderController',
        ]);
    }
}

