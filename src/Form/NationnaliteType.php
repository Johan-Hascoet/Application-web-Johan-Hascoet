<?php

namespace App\Form;

use App\Entity\Nationnalite;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use App\Entity\Pays;
class NationnaliteType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nomNatio', TextType::class)
            ->add('Pays', EntityType::class, 
            array('class' => Pays::class,
                  'choice_label' => 'nom',
                  'multiple' => false,
                  'expanded' => false,))
            ->add('Sauvegarde', SubmitType::class)

        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Nationnalite::class,
        ]);
    }
}
