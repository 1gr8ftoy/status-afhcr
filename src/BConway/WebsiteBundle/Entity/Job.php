<?php

namespace BConway\WebsiteBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Job
 */
class Job
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $customerFirstName;

    /**
     * @var string
     */
    private $customerLastName;

    /**
     * @var string
     */
    private $customerCompany;

    /**
     * @var string
     */
    private $alternatePickupFirstName;

    /**
     * @var string
     */
    private $alternatePickupLastName;

    /**
     * @var string
     */
    private $customerPhoneNumber1;

    /**
     * @var string
     */
    private $customerPhoneNumber2;

    /**
     * @var string
     */
    private $customerEmailAddress;

    /**
     * @var string
     */
    private $computerFormFactor;

    /**
     * @var string
     */
    private $computerManufacturer;

    /**
     * @var string
     */
    private $computerModel;

    /**
     * @var string
     */
    private $computerSerialNumber;

    /**
     * @var string
     */
    private $computerProductNumber;

    /**
     * @var string
     */
    private $computerPasswords;

    /**
     * @var string
     */
    private $jobNotes;

    /**
     * @var boolean
     */
    private $rushOrder;

    /**
     * @var float
     */
    private $jobQuotedPrice;

    /**
     * @var string
     */
    private $jobPrivateNotes;

    /**
     * @var \DateTime
     */
    private $jobPromiseDate;

    /**
     * @var integer
     */
    private $jobCreatedBy;

    /**
     * @var boolean
     */
    private $computerSpecDustingNeeded;

    /**
     * @var string
     */
    private $computerSpecRAM;

    /**
     * @var string
     */
    private $computerSpecAVType;

    /**
     * @var boolean
     */
    private $computerSpecAVExpired;

    /**
     * @var string
     */
    private $computerSpecHardDrive;

    /**
     * @var integer
     */
    private $jobAssignedTech;

    /**
     * @var string
     */
    private $jobOriginalLocation;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set customerFirstName
     *
     * @param string $customerFirstName
     * @return Job
     */
    public function setCustomerFirstName($customerFirstName)
    {
        $this->customerFirstName = $customerFirstName;
    
        return $this;
    }

    /**
     * Get customerFirstName
     *
     * @return string 
     */
    public function getCustomerFirstName()
    {
        return $this->customerFirstName;
    }

    /**
     * Set customerLastName
     *
     * @param string $customerLastName
     * @return Job
     */
    public function setCustomerLastName($customerLastName)
    {
        $this->customerLastName = $customerLastName;
    
        return $this;
    }

    /**
     * Get customerLastName
     *
     * @return string 
     */
    public function getCustomerLastName()
    {
        return $this->customerLastName;
    }

    /**
     * Set customerCompany
     *
     * @param string $customerCompany
     * @return Job
     */
    public function setCustomerCompany($customerCompany)
    {
        $this->customerCompany = $customerCompany;
    
        return $this;
    }

    /**
     * Get customerCompany
     *
     * @return string 
     */
    public function getCustomerCompany()
    {
        return $this->customerCompany;
    }

    /**
     * Set alternatePickupFirstName
     *
     * @param string $alternatePickupFirstName
     * @return Job
     */
    public function setAlternatePickupFirstName($alternatePickupFirstName)
    {
        $this->alternatePickupFirstName = $alternatePickupFirstName;
    
        return $this;
    }

    /**
     * Get alternatePickupFirstName
     *
     * @return string 
     */
    public function getAlternatePickupFirstName()
    {
        return $this->alternatePickupFirstName;
    }

    /**
     * Set alternatePickupLastName
     *
     * @param string $alternatePickupLastName
     * @return Job
     */
    public function setAlternatePickupLastName($alternatePickupLastName)
    {
        $this->alternatePickupLastName = $alternatePickupLastName;
    
        return $this;
    }

    /**
     * Get alternatePickupLastName
     *
     * @return string 
     */
    public function getAlternatePickupLastName()
    {
        return $this->alternatePickupLastName;
    }

    /**
     * Set customerPhoneNumber1
     *
     * @param string $customerPhoneNumber1
     * @return Job
     */
    public function setCustomerPhoneNumber1($customerPhoneNumber1)
    {
        $this->customerPhoneNumber1 = $customerPhoneNumber1;
    
        return $this;
    }

    /**
     * Get customerPhoneNumber1
     *
     * @return string 
     */
    public function getCustomerPhoneNumber1()
    {
        return $this->customerPhoneNumber1;
    }

    /**
     * Set customerPhoneNumber2
     *
     * @param string $customerPhoneNumber2
     * @return Job
     */
    public function setCustomerPhoneNumber2($customerPhoneNumber2)
    {
        $this->customerPhoneNumber2 = $customerPhoneNumber2;
    
        return $this;
    }

    /**
     * Get customerPhoneNumber2
     *
     * @return string 
     */
    public function getCustomerPhoneNumber2()
    {
        return $this->customerPhoneNumber2;
    }

    /**
     * Set customerEmailAddress
     *
     * @param string $customerEmailAddress
     * @return Job
     */
    public function setCustomerEmailAddress($customerEmailAddress)
    {
        $this->customerEmailAddress = $customerEmailAddress;
    
        return $this;
    }

    /**
     * Get customerEmailAddress
     *
     * @return string 
     */
    public function getCustomerEmailAddress()
    {
        return $this->customerEmailAddress;
    }

    /**
     * Set computerFormFactor
     *
     * @param string $computerFormFactor
     * @return Job
     */
    public function setComputerFormFactor($computerFormFactor)
    {
        $this->computerFormFactor = $computerFormFactor;
    
        return $this;
    }

    /**
     * Get computerFormFactor
     *
     * @return string 
     */
    public function getComputerFormFactor()
    {
        return $this->computerFormFactor;
    }

    /**
     * Set computerManufacturer
     *
     * @param string $computerManufacturer
     * @return Job
     */
    public function setComputerManufacturer($computerManufacturer)
    {
        $this->computerManufacturer = $computerManufacturer;
    
        return $this;
    }

    /**
     * Get computerManufacturer
     *
     * @return string 
     */
    public function getComputerManufacturer()
    {
        return $this->computerManufacturer;
    }

    /**
     * Set computerModel
     *
     * @param string $computerModel
     * @return Job
     */
    public function setComputerModel($computerModel)
    {
        $this->computerModel = $computerModel;
    
        return $this;
    }

    /**
     * Get computerModel
     *
     * @return string 
     */
    public function getComputerModel()
    {
        return $this->computerModel;
    }

    /**
     * Set computerSerialNumber
     *
     * @param string $computerSerialNumber
     * @return Job
     */
    public function setComputerSerialNumber($computerSerialNumber)
    {
        $this->computerSerialNumber = $computerSerialNumber;
    
        return $this;
    }

    /**
     * Get computerSerialNumber
     *
     * @return string 
     */
    public function getComputerSerialNumber()
    {
        return $this->computerSerialNumber;
    }

    /**
     * Set computerProductNumber
     *
     * @param string $computerProductNumber
     * @return Job
     */
    public function setComputerProductNumber($computerProductNumber)
    {
        $this->computerProductNumber = $computerProductNumber;
    
        return $this;
    }

    /**
     * Get computerProductNumber
     *
     * @return string 
     */
    public function getComputerProductNumber()
    {
        return $this->computerProductNumber;
    }

    /**
     * Set computerPasswords
     *
     * @param string $computerPasswords
     * @return Job
     */
    public function setComputerPasswords($computerPasswords)
    {
        $this->computerPasswords = $computerPasswords;
    
        return $this;
    }

    /**
     * Get computerPasswords
     *
     * @return string 
     */
    public function getComputerPasswords()
    {
        return $this->computerPasswords;
    }

    /**
     * Set jobNotes
     *
     * @param string $jobNotes
     * @return Job
     */
    public function setJobNotes($jobNotes)
    {
        $this->jobNotes = $jobNotes;
    
        return $this;
    }

    /**
     * Get jobNotes
     *
     * @return string 
     */
    public function getJobNotes()
    {
        return $this->jobNotes;
    }

    /**
     * Set rushOrder
     *
     * @param boolean $rushOrder
     * @return Job
     */
    public function setRushOrder($rushOrder)
    {
        $this->rushOrder = $rushOrder;
    
        return $this;
    }

    /**
     * Get rushOrder
     *
     * @return boolean 
     */
    public function getRushOrder()
    {
        return $this->rushOrder;
    }

    /**
     * Set jobQuotedPrice
     *
     * @param float $jobQuotedPrice
     * @return Job
     */
    public function setJobQuotedPrice($jobQuotedPrice)
    {
        $this->jobQuotedPrice = $jobQuotedPrice;
    
        return $this;
    }

    /**
     * Get jobQuotedPrice
     *
     * @return float 
     */
    public function getJobQuotedPrice()
    {
        return $this->jobQuotedPrice;
    }

    /**
     * Set jobPrivateNotes
     *
     * @param string $jobPrivateNotes
     * @return Job
     */
    public function setJobPrivateNotes($jobPrivateNotes)
    {
        $this->jobPrivateNotes = $jobPrivateNotes;
    
        return $this;
    }

    /**
     * Get jobPrivateNotes
     *
     * @return string 
     */
    public function getJobPrivateNotes()
    {
        return $this->jobPrivateNotes;
    }

    /**
     * Set jobPromiseDate
     *
     * @param \DateTime $jobPromiseDate
     * @return Job
     */
    public function setJobPromiseDate($jobPromiseDate)
    {
        $this->jobPromiseDate = $jobPromiseDate;
    
        return $this;
    }

    /**
     * Get jobPromiseDate
     *
     * @return \DateTime 
     */
    public function getJobPromiseDate()
    {
        return $this->jobPromiseDate;
    }

    /**
     * Set jobCreatedBy
     *
     * @param integer $jobCreatedBy
     * @return Job
     */
    public function setJobCreatedBy($jobCreatedBy)
    {
        $this->jobCreatedBy = $jobCreatedBy;
    
        return $this;
    }

    /**
     * Get jobCreatedBy
     *
     * @return integer 
     */
    public function getJobCreatedBy()
    {
        return $this->jobCreatedBy;
    }

    /**
     * Set computerSpecDustingNeeded
     *
     * @param boolean $computerSpecDustingNeeded
     * @return Job
     */
    public function setComputerSpecDustingNeeded($computerSpecDustingNeeded)
    {
        $this->computerSpecDustingNeeded = $computerSpecDustingNeeded;
    
        return $this;
    }

    /**
     * Get computerSpecDustingNeeded
     *
     * @return boolean 
     */
    public function getComputerSpecDustingNeeded()
    {
        return $this->computerSpecDustingNeeded;
    }

    /**
     * Set computerSpecRAM
     *
     * @param string $computerSpecRAM
     * @return Job
     */
    public function setComputerSpecRAM($computerSpecRAM)
    {
        $this->computerSpecRAM = $computerSpecRAM;
    
        return $this;
    }

    /**
     * Get computerSpecRAM
     *
     * @return string 
     */
    public function getComputerSpecRAM()
    {
        return $this->computerSpecRAM;
    }

    /**
     * Set computerSpecAVType
     *
     * @param string $computerSpecAVType
     * @return Job
     */
    public function setComputerSpecAVType($computerSpecAVType)
    {
        $this->computerSpecAVType = $computerSpecAVType;
    
        return $this;
    }

    /**
     * Get computerSpecAVType
     *
     * @return string 
     */
    public function getComputerSpecAVType()
    {
        return $this->computerSpecAVType;
    }

    /**
     * Set computerSpecAVExpired
     *
     * @param boolean $computerSpecAVExpired
     * @return Job
     */
    public function setComputerSpecAVExpired($computerSpecAVExpired)
    {
        $this->computerSpecAVExpired = $computerSpecAVExpired;
    
        return $this;
    }

    /**
     * Get computerSpecAVExpired
     *
     * @return boolean 
     */
    public function getComputerSpecAVExpired()
    {
        return $this->computerSpecAVExpired;
    }

    /**
     * Set computerSpecHardDrive
     *
     * @param string $computerSpecHardDrive
     * @return Job
     */
    public function setComputerSpecHardDrive($computerSpecHardDrive)
    {
        $this->computerSpecHardDrive = $computerSpecHardDrive;
    
        return $this;
    }

    /**
     * Get computerSpecHardDrive
     *
     * @return string 
     */
    public function getComputerSpecHardDrive()
    {
        return $this->computerSpecHardDrive;
    }

    /**
     * Set jobAssignedTech
     *
     * @param integer $jobAssignedTech
     * @return Job
     */
    public function setJobAssignedTech($jobAssignedTech)
    {
        $this->jobAssignedTech = $jobAssignedTech;
    
        return $this;
    }

    /**
     * Get jobAssignedTech
     *
     * @return integer 
     */
    public function getJobAssignedTech()
    {
        return $this->jobAssignedTech;
    }

    /**
     * Set jobOriginalLocation
     *
     * @param string $jobOriginalLocation
     * @return Job
     */
    public function setJobOriginalLocation($jobOriginalLocation)
    {
        $this->jobOriginalLocation = $jobOriginalLocation;
    
        return $this;
    }

    /**
     * Get jobOriginalLocation
     *
     * @return string 
     */
    public function getJobOriginalLocation()
    {
        return $this->jobOriginalLocation;
    }
}
