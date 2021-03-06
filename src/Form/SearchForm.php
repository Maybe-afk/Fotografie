<?php

namespace App\Form;

use App\Data\SearchData;
use App\Entity\Category;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;

class SearchForm extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
        ->add('q', TextType::class,[
            'label' => false,
            'required' => false,
            'attr' => [
                'placeholder' => 'Wyszukaj'
            ]
        ])
        ->add('categories', EntityType::class, [
            'label' => false,
            'required' => false,
            'class' => Category::class,
            'expanded' => true,
            'multiple' =>true


        ])
        ->add('min', NumberType::class, [
            'label' =>false,
            'required' => false,
            'attr' => [
                'placeholder' => 'min'
            ]
        ])

        ->add('max', NumberType::class, [
            'label' =>false,
            'required' => false,
            'attr' => [
                'placeholder' => 'max'
            ]
        ])

        ->add('promo', CheckboxType::class, [
            'label' => false,
            'required' => false
            
        ])
        
        ;

    }
   public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => SearchData::class,
            'method' => 'GET',
            'csrf_protection' =>false
        ]);
    }
public function getBlockPrefix()
{
    return '';
}
    
}