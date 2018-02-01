<?php
// src/AppBundle/Form/RegistrationType.php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Bridge\Doctrine\Form\Type\EntityType; 


class RegistrationType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
        ->add('name')
        ->add('surname')
        ->add('age');
    }

    public function getParent()
    {
        return 'FOS\UserBundle\Form\Type\RegistrationFormType';
        // return 'fos_user_registration';
    }

    public function getName()
    {
        return $this->getBlockPrefix();
        // return 'app_user_registration';
    }
    public function getBlockPrefix()
    {
        return 'app_user_registration';
    }
}