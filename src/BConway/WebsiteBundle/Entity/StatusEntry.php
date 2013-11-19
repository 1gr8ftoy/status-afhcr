<?php

namespace BConway\WebsiteBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * StatusEntry
 */
class StatusEntry
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var integer
     */
    private $jobId;

    /**
     * @var \DateTime
     */
    private $entryTime;

    /**
     * @var integer
     */
    private $entryType;

    /**
     * @var string
     */
    private $entryNotes;

    /**
     * @var integer
     */
    private $createdBy;


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
     * Set jobId
     *
     * @param integer $jobId
     * @return StatusEntry
     */
    public function setJobId($jobId)
    {
        $this->jobId = $jobId;
    
        return $this;
    }

    /**
     * Get jobId
     *
     * @return integer 
     */
    public function getJobId()
    {
        return $this->jobId;
    }

    /**
     * Set entryTime
     *
     * @param \DateTime $entryTime
     * @return StatusEntry
     */
    public function setEntryTime($entryTime)
    {
        $this->entryTime = $entryTime;
    
        return $this;
    }

    /**
     * Get entryTime
     *
     * @return \DateTime 
     */
    public function getEntryTime()
    {
        return $this->entryTime;
    }

    /**
     * Set entryType
     *
     * @param integer $entryType
     * @return StatusEntry
     */
    public function setEntryType($entryType)
    {
        $this->entryType = $entryType;
    
        return $this;
    }

    /**
     * Get entryType
     *
     * @return integer 
     */
    public function getEntryType()
    {
        return $this->entryType;
    }

    /**
     * Set entryNotes
     *
     * @param string $entryNotes
     * @return StatusEntry
     */
    public function setEntryNotes($entryNotes)
    {
        $this->entryNotes = $entryNotes;
    
        return $this;
    }

    /**
     * Get entryNotes
     *
     * @return string 
     */
    public function getEntryNotes()
    {
        return $this->entryNotes;
    }

    /**
     * Set createdBy
     *
     * @param integer $createdBy
     * @return PrivateNote
     */
    public function setCreatedBy($createdBy)
    {
        $this->createdBy = $createdBy;

        return $this;
    }

    /**
     * Get createdBy
     *
     * @return integer
     */
    public function getCreatedBy()
    {
        return $this->createdBy;
    }
}
