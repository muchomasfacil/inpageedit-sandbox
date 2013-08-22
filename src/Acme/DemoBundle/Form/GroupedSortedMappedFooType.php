<?php

namespace Acme\DemoBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class GroupedSortedMappedFooType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('date')
            ->add('header')
            ->add('text')
            ->add('ipe_handler', 'hidden')
            ->add('ipe_position', 'hidden')
        ;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Acme\DemoBundle\Entity\GroupedSortedMappedFoo'
        ));
    }

    public function getName()
    {
        return 'grouped_sorted_mapped_foo';
    }
}