<?php

namespace Erazr\Bundle\SiteBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class PostType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('content')
            ->add('timer', 'time', array(
                'widget' => 'text',
                'required' => false,
                //'data'  => new \DateTime("now"),
                'invalid_message' => 'Veuillez rentrer des heures et des minutes', 

                )
            )
            ->add('color', 'choice', array(
                'choices' => array(
                    'orange' => 'Orange',
                    'blue' => 'Bleu',
                    'green' => 'Vert'
                ),
                'required'    => false,
                'empty_value' => false,
                'empty_data'  => null,
                'multiple' => false,
                'expanded' => true,
            ));
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Erazr\Bundle\SiteBundle\Entity\Post'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'erazr_bundle_sitebundle_post';
    }
}
