<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


class UserController extends AbstractController
{
    #[Route('/user', name: 'user')]
    public function index(): Response
    {
        return $this->render('user/userPanel.html.twig', [
            'controller_name' => 'UserController',
        ]);
    }

    #[Route('/userEdit', name: 'userEdit')]
    public function userEdit(): Response
    {
        return $this->render('user/userPanelEdit.html.twig', [
            'controller_name' => 'UserController',
        ]);
    }
}
