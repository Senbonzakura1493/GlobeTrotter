<?php

namespace App\Form;

use App\Entity\travel;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class CriticalArticleType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('Category')
            ->add('Destination')
            ->add('resume')
            ->add('PlaceToVisit')
            //->add('DateTime')
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => travel::class,
        ]);
    }
}
