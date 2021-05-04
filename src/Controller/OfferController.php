<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class OfferController extends AbstractController
{
    #[Route('/imageOffer', name: 'imageOffer')]
    public function index(): Response
    {
        return $this->render('imageOffer/imageOffer.html.twig', [
            'controller_name' => 'OfferController',
        ]);
    }
}
