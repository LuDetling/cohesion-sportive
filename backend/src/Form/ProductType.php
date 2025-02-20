<?php

namespace App\Form;

use App\Entity\Equipment;
use App\Entity\Muscle;
use App\Entity\Product;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ProductType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('Title')
            ->add('Video')
            ->add('Image')
            ->add('description')
            ->add('muscles', EntityType::class, [
                'class' => Muscle::class,
                'choice_label' => 'id',
                'multiple' => true,
            ])
            ->add('Equipments', EntityType::class, [
                'class' => Equipment::class,
                'choice_label' => 'id',
                'multiple' => true,
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Product::class,
            'csrf_protection' => false
        ]);
    }
}
