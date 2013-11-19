<?php

namespace BConway\WebsiteBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PrivateNote
 */
class PrivateNote
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
     * @var string
     */
    private $noteText;

    /**
     * @var \DateTime
     */
    private $noteTime;

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
     * @return PrivateNote
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
     * Set noteText
     *
     * @param string $noteText
     * @return PrivateNote
     */
    public function setNoteText($noteText)
    {
        $this->noteText = $noteText;
    
        return $this;
    }

    /**
     * Get noteText
     *
     * @return string 
     */
    public function getNoteText()
    {
        return $this->noteText;
    }

    /**
     * Set noteTime
     *
     * @param \DateTime $noteTime
     * @return PrivateNote
     */
    public function setNoteTime($noteTime)
    {
        $this->noteTime = $noteTime;
    
        return $this;
    }

    /**
     * Get noteTime
     *
     * @return \DateTime 
     */
    public function getNoteTime()
    {
        return $this->noteTime;
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
