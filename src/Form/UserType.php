<?php

namespace App\Form;

use App\Entity\User;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\RepeatedType;

class UserType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('pseudo')
            ->add('password', RepeatedType::class, [
                'type' => PasswordType::class,
                'invalid_message' => 'Les mots de passe ne correspondent pas',
                'first_options'  => ['label' => 'Mot de passe'],
                'second_options' => ['label' => 'Répéter mot de passe'],
            ])
            ->add('email', EmailType::class)
            ->add('rang1v1', ChoiceType::class, [
                'choices' => [
                    'Unranked' => [
                        'Unranked' => 'Unranked',
                    ],
                    'Bronze' => [
                        'Bronze 1' => 'Bronze 1',
                        'Bronze 2' => 'Bronze 2',
                        'Bronze 3' => 'Bronze 3',
                    ],
                    'Silver' => [
                        'Silver 1' => 'Silver 1',
                        'Silver 2' => 'Silver 2',
                        'Silver 3' => 'Silver 3',

                    ],
                    'Gold' => [
                        'Gold 1' => 'Gold 1',
                        'Gold 2' => 'Gold 2',
                        'Gold 3' => 'Gold 3',
                    ],
                    'Platine' => [
                        'Platine 1' => 'Platine 1',
                        'Platine 2' => 'Platine 2',
                        'Platine 3' => 'Platine 3',
                    ],
                    'Diamant' => [
                        'Diamant 1' => 'Diamant 1',
                        'Diamant 2' => 'Diamant 2',
                        'Diamant 3' => 'Diamant 3',
                    ],
                    'Champion' => [
                        'Champion 1' => 'Champion 1',
                        'Champion 2' => 'Champion 2',
                        'Champion 3' => 'Champion 3',
                    ],
                    'Grand Champion' => [
                        'Grand Champion' => 'Grand Champion',
                    ],
                ],
            ])
            ->add('rang2v2', ChoiceType::class, [
                'choices' => [
                    'Unranked' => [
                        'Unranked' => 'Unranked',
                    ],
                    'Bronze' => [
                        'Bronze 1' => 'Bronze 1',
                        'Bronze 2' => 'Bronze 2',
                        'Bronze 3' => 'Bronze 3',
                    ],
                    'Silver' => [
                        'Silver 1' => 'Silver 1',
                        'Silver 2' => 'Silver 2',
                        'Silver 3' => 'Silver 3',

                    ],
                    'Gold' => [
                        'Gold 1' => 'Gold 1',
                        'Gold 2' => 'Gold 2',
                        'Gold 3' => 'Gold 3',
                    ],
                    'Platine' => [
                        'Platine 1' => 'Platine 1',
                        'Platine 2' => 'Platine 2',
                        'Platine 3' => 'Platine 3',
                    ],
                    'Diamant' => [
                        'Diamant 1' => 'Diamant 1',
                        'Diamant 2' => 'Diamant 2',
                        'Diamant 3' => 'Diamant 3',
                    ],
                    'Champion' => [
                        'Champion 1' => 'Champion 1',
                        'Champion 2' => 'Champion 2',
                        'Champion 3' => 'Champion 3',
                    ],
                    'Grand Champion' => [
                        'Grand Champion' => 'Grand Champion',
                    ],
                ],
            ])
            ->add('rang3v3solo', ChoiceType::class, [
                'choices' => [
                    'Unranked' => [
                        'Unranked' => 'Unranked',
                    ],
                    'Bronze' => [
                        'Bronze 1' => 'Bronze 1',
                        'Bronze 2' => 'Bronze 2',
                        'Bronze 3' => 'Bronze 3',
                    ],
                    'Silver' => [
                        'Silver 1' => 'Silver 1',
                        'Silver 2' => 'Silver 2',
                        'Silver 3' => 'Silver 3',

                    ],
                    'Gold' => [
                        'Gold 1' => 'Gold 1',
                        'Gold 2' => 'Gold 2',
                        'Gold 3' => 'Gold 3',
                    ],
                    'Platine' => [
                        'Platine 1' => 'Platine 1',
                        'Platine 2' => 'Platine 2',
                        'Platine 3' => 'Platine 3',
                    ],
                    'Diamant' => [
                        'Diamant 1' => 'Diamant 1',
                        'Diamant 2' => 'Diamant 2',
                        'Diamant 3' => 'Diamant 3',
                    ],
                    'Champion' => [
                        'Champion 1' => 'Champion 1',
                        'Champion 2' => 'Champion 2',
                        'Champion 3' => 'Champion 3',
                    ],
                    'Grand Champion' => [
                        'Grand Champion' => 'Grand Champion',
                    ],
                ],
            ])
            ->add('rang3v3team', ChoiceType::class, [
                'choices' => [
                    'Unranked' => [
                        'Unranked' => 'Unranked',
                    ],
                    'Bronze' => [
                        'Bronze 1' => 'Bronze 1',
                        'Bronze 2' => 'Bronze 2',
                        'Bronze 3' => 'Bronze 3',
                    ],
                    'Silver' => [
                        'Silver 1' => 'Silver 1',
                        'Silver 2' => 'Silver 2',
                        'Silver 3' => 'Silver 3',

                    ],
                    'Gold' => [
                        'Gold 1' => 'Gold 1',
                        'Gold 2' => 'Gold 2',
                        'Gold 3' => 'Gold 3',
                    ],
                    'Platine' => [
                        'Platine 1' => 'Platine 1',
                        'Platine 2' => 'Platine 2',
                        'Platine 3' => 'Platine 3',
                    ],
                    'Diamant' => [
                        'Diamant 1' => 'Diamant 1',
                        'Diamant 2' => 'Diamant 2',
                        'Diamant 3' => 'Diamant 3',
                    ],
                    'Champion' => [
                        'Champion 1' => 'Champion 1',
                        'Champion 2' => 'Champion 2',
                        'Champion 3' => 'Champion 3',
                    ],
                    'Grand Champion' => [
                        'Grand Champion' => 'Grand Champion',
                    ],
                ],
            ])
            ->add('nbHeures')
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => User::class,
        ]);
    }
}
