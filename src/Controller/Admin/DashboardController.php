<?php

namespace App\Controller\Admin;
use App\Entity\Product;
use App\Entity\Users;
use App\Entity\Test;
use App\Entity\Answer;
use App\Entity\Category;
use EasyCorp\Bundle\EasyAdminBundle\Config\Dashboard;
use EasyCorp\Bundle\EasyAdminBundle\Config\MenuItem;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractDashboardController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DashboardController extends AbstractDashboardController 
{
    /**
     * @Route("/admin", name="admin")
     */
    public function index(): Response
    {
        return parent::index();
    }

    public function configureDashboard(): Dashboard
    {
        return Dashboard::new()
            ->setTitle('Podchody');
    }

    public function configureMenuItems(): iterable
    {
       // yield MenuItem::linktoDashboard('Dashboard', 'fa fa-home');
        yield MenuItem::linkToCrud('User', 'fa fa-user', Users::class);
         yield MenuItem::linkToCrud('Podchody', 'fas fa-list', Product::class);
         yield MenuItem::linkToCrud('#', 'fas fa-list', Category::class);
         yield MenuItem::linkToCrud('Test', 'fas fa-list', Test::class);
         yield MenuItem::linkToCrud('Answer', 'fas fa-list', Answer::class);
        
        
         
    }
}
