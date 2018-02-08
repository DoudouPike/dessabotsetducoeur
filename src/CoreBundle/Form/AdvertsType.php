<?php

namespace CoreBundle\Form;

use CoreBundle\Entity\Categories;
use Ivory\CKEditorBundle\Form\Type\CKEditorType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class AdvertsType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name', TextType::class)
            ->add('descriptionToAdopt', CKEditorType::class, [
                    'config' => [
                        'uiColor' => '#ffffff',
                        //...
                    ],
                ])
            ->add('descriptionAdopted', TextType::class, [
                'required' => false
            ])
            ->add('dateCreation', DateType::class, [
                'mapped' => 'false',
                'widget' => 'choice'
            ])
            ->add('dateAdopted', DateType::class, [
                'mapped' => 'false',
                'widget' => 'choice',
                'required' => false
            ])
            ->add('published', CheckboxType::class)
            ->add('category', EntityType::class, [
                'mapped' => false,
                'class' => Categories::class
            ])
        ;
    }/**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'CoreBundle\Entity\Adverts',
            'validation_groups' => array('Default', 'Adverts_create'),
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'corebundle_adverts';
    }


}
