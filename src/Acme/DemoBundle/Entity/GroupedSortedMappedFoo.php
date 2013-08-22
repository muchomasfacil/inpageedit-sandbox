<?php

namespace Acme\DemoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * GroupedSortedMappedFoo
 */
class GroupedSortedMappedFoo
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var \DateTime
     */
    private $date;

    /**
     * @var string
     */
    private $header;

    /**
     * @var string
     */
    private $text;

    /**
     * @var string
     */
    private $ipe_handler;

    /**
     * @var integer
     */
    private $ipe_position;


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
     * Set date
     *
     * @param \DateTime $date
     * @return GroupedSortedMappedFoo
     */
    public function setDate($date)
    {
        $this->date = $date;
    
        return $this;
    }

    /**
     * Get date
     *
     * @return \DateTime 
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set header
     *
     * @param string $header
     * @return GroupedSortedMappedFoo
     */
    public function setHeader($header)
    {
        $this->header = $header;
    
        return $this;
    }

    /**
     * Get header
     *
     * @return string 
     */
    public function getHeader()
    {
        return $this->header;
    }

    /**
     * Set text
     *
     * @param string $text
     * @return GroupedSortedMappedFoo
     */
    public function setText($text)
    {
        $this->text = $text;
    
        return $this;
    }

    /**
     * Get text
     *
     * @return string 
     */
    public function getText()
    {
        return $this->text;
    }

    /**
     * Set ipe_handler
     *
     * @param string $ipeHandler
     * @return GroupedSortedMappedFoo
     */
    public function setIpeHandler($ipeHandler)
    {
        $this->ipe_handler = $ipeHandler;
    
        return $this;
    }

    /**
     * Get ipe_handler
     *
     * @return string 
     */
    public function getIpeHandler()
    {
        return $this->ipe_handler;
    }

    /**
     * Set ipe_position
     *
     * @param integer $ipePosition
     * @return GroupedSortedMappedFoo
     */
    public function setIpePosition($ipePosition)
    {
        $this->ipe_position = $ipePosition;
    
        return $this;
    }

    /**
     * Get ipe_position
     *
     * @return integer 
     */
    public function getIpePosition()
    {
        return $this->ipe_position;
    }
}
