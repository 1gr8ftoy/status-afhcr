<?php

namespace BConway\WebsiteBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class StatusEntryType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('entryTime')
            ->add('entryType')
            ->add('entryNotes')
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
            'data_class' => 'BConway\WebsiteBundle\Entity\StatusEntry'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'bconway_websitebundle_statusentry';
    }
}
