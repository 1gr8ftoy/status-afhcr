<?php

namespace BConway\WebsiteBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class JobType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('customerFirstName')
            ->add('customerLastName')
            ->add('customerCompany')
            ->add('alternatePickupFirstName')
            ->add('alternatePickupLastName')
            ->add('customerPhoneNumber1')
            ->add('customerPhoneNumber2')
            ->add('customerEmailAddress')
            ->add('computerFormFactor', 'choice', array(
                'choices' => array(
                    'Desktop',
                    'Laptop',
                    'External Hard Drive',
                    'Internal Hard Drive',
                    'Other',
                )
            ))
            ->add('computerManufacturer', 'choice', array(
                'choices' => array(
                    'Alienware',
                    'Apple',
                    'Asus',
                    'Compaq',
                    'Custom PC',
                    'Dell',
                    'eMachines',
                    'FIC/CISNet',
                    'Gateway',
                    'HP',
                    'Lenovo',
                    'Other',
                    'Sony',
                    'Toshiba',
                )
            ))
            ->add('computerModel')
            ->add('computerSerialNumber')
            ->add('computerProductNumber')
            ->add('computerPasswords')
            ->add('jobNotes')
            ->add('rushOrder')
            ->add('jobQuotedPrice')
            ->add('jobPromiseDate')
            ->add('jobCreatedBy')
            ->add('computerSpecDustingNeeded')
            ->add('computerSpecRAM')
            ->add('computerSpecAVType')
            ->add('computerSpecAVExpired')
            ->add('computerSpecHardDrive')
            ->add('jobAssignedTech')
            ->add('jobOriginalLocation')
            ->add('jobCreatedAt')
            ->add('jobUpdatedAt')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'BConway\WebsiteBundle\Entity\Job'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'bconway_websitebundle_job';
    }
}
