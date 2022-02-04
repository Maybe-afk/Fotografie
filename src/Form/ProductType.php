<?php

namespace App\Form;

use App\Entity\Product;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ProductType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder            
            ->add('name', null, array('label' => false))
            ->add('price', null, array('label' => false))
            ->add('author', null, array('label' => false))
            ->add('promo', null, array('label' => false))
            ->add('image', null, array('label' => false))
            ->add('amount', null, array('label' => false))
            ->add('dlugosc', null, array('label' => false))
            ->add('szerokosc', null, array('label' => false))
            ->add('data', null, array('label' => false))
            ->add('region', null, array('label' => false))
            ->add('description', null, array('label' => false))
            ->add('categories', null, array('label' => false))
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Product::class,
        ]);
    }
}
