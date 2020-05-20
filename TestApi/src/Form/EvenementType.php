<?php

namespace App\Form;

use App\Entity\Evenement;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class EvenementType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('updated_at')
            ->add('name')
            ->add('contry')
            ->add('city')
            ->add('address')
            ->add('date')
            ->add('image')
            ->add('type')
            ->add('active')
            ->add('public')
            ->add('capaciterMaxPersonne')
            ->add('typeDeSale')
            ->add('Lat')
            ->add('lng')
            ->add('FREE')
            ->add('region')
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Evenement::class,
        ]);
    }
}
