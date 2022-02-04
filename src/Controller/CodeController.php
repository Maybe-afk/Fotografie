<?php

namespace App\Controller;

use App\Entity\Code;
use App\Form\CodeType;
use App\Repository\ProductRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CodeController extends AbstractController
{
    
    #[Route('/code/{id}', name: 'code_show', methods: ['GET'])]
    public function show(ProductRepository $repository,Code $code): Response
    { 
        
        $products = $repository->findOneBy([
            'id' => $code,
        ]);
        return $this->render('code/index.html.twig', [
            'code' => $code,
            'products' => $products
        ]);
    }
}
