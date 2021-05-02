<?php

namespace App\Repository;

use App\Data\SearchData;
use App\Form\SearchForm;
use App\Entity\Product;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Product|null find($id, $lockMode = null, $lockVersion = null)
 * @method Product|null findOneBy(array $criteria, array $orderBy = null)
 * @method Product[]    findAll()
 * @method Product[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ProductRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Product::class);
    }

    /**
     * @return Product[]
     */
    public function findSearch(SearchData $search): array
    {
        $query = $this
        ->createQueryBuilder('p')
        ->select('c', 'p')
        -> join('p.categories', 'c');
        if(!empty($search->q)) {
            $query =$query
            ->andWhere('p.name LIKE :q')
            ->setParameter('q',"%{$search->q}%");
        }

        if(!empty($search->min)) {
            $query =$query
            ->andWhere('p.price >= :min')
            ->setParameter('min', $search->min);
        }

        if(!empty($search->max)) {
            $query =$query
            ->andWhere('p.price <= :max')
            ->setParameter('max', $search->min);
        }

        if(!empty($search->promo)) {
            $query =$query
            ->andWhere('p.promo = 1');
        }

        if(!empty($search->categories)) {
            $query =$query
            ->andWhere('c.id IN(:categories)')
            ->setParameter('categories', $search->categories);
        }

        return $query->getQuery()->getResult();
        

    }
}
