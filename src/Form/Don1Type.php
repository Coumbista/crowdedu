<?php

namespace App\Form;

use App\Entity\Don;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class Don1Type extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('montant')
            ->add('nom')
            ->add('prenom')
            ->add('email')
            ->add('date')
            // ->add('projet')
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Don::class,
        ]);
    }
}
