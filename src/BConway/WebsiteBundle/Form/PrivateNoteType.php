<?php

namespace BConway\WebsiteBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class PrivateNoteType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('noteText')
            ->add('noteTime')
            ->add('createdBy')
            ->add('job')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'BConway\WebsiteBundle\Entity\PrivateNote'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'bconway_websitebundle_privatenote';
    }
}
