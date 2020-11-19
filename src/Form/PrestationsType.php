<?php

namespace App\Form;

use App\Entity\User;
use App\Entity\Prestations;
use Doctrine\ORM\EntityRepository;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;

class PrestationsType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            // ->add('name', TextType::class)
            ->add('name', ChoiceType::class, [
                'required' => true,
                'multiple' => false,
                'expanded' => false,
                    'choices'  => [
                        'Soins' => 'soins',
                        'Esthétique' => 'esthetique',
                        'Coiffure' => 'coiffure',
                ],
            ])
            ->add('description', TextareaType::class)
            ->add('prix', NumberType::class, [
                'scale' => 2,
                ]
            )
            // ->add('prestataire', EntityType::class, [
            //     'class' => User::class,
            //     'query_builder' => function (EntityRepository $er) {
            //         return $er->createQueryBuilder('u')
            //             ->orderBy('u.email', 'DESC')
            //             ->setMaxResults(1);
            //     },
            //     'choice_label' => 'email',
            //     'disabled' => true,
            // ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Prestations::class,
        ]);
    }
}
