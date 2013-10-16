<?php
/**
 * Created by JetBrains PhpStorm.
 * User: Paul Hendryx (phendryx@malwarebytes.org)
 * Date: 10/14/13
 * Time: 11:52 AM
 */

namespace Malwarebytes\SmartyStreetsBundle\Entity;

/**
 * http://smartystreets.com/kb/liveaddress-api/rest-endpoint
 */
class StreetAddressRequest
{
    /** @var string */
    private $inputId;

    /** @var string */
    private $street;

    /** @var string */
    private $street2;

    /** @var string */
    private $secondary;

    /** @var string */
    private $city;

    /** @var string */
    private $state;

    /** @var string */
    private $zipcode;

    /** @var string */
    private $lastLine;

    /** @var string */
    private $addressee;

    /** @var string */
    private $urbanization;

    /** @var string */
    private $callback;

    /** @var integer */
    private $candidates;

    /**
     * @param string $addressee
     */
    public function setAddressee($addressee)
    {
        $this->addressee = $addressee;
    }

    /**
     * @return string
     */
    public function getAddressee()
    {
        return $this->addressee;
    }

    /**
     * @param string $callback
     */
    public function setCallback($callback)
    {
        $this->callback = $callback;
    }

    /**
     * @return string
     */
    public function getCallback()
    {
        return $this->callback;
    }

    /**
     * @param int $candidates
     */
    public function setCandidates($candidates)
    {
        $this->candidates = $candidates;
    }

    /**
     * @return int
     */
    public function getCandidates()
    {
        return $this->candidates;
    }

    /**
     * @param string $city
     */
    public function setCity($city)
    {
        $this->city = $city;
    }

    /**
     * @return string
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * @param string $inputId
     */
    public function setInputId($inputId)
    {
        $this->inputId = $inputId;
    }

    /**
     * @return string
     */
    public function getInputId()
    {
        return $this->inputId;
    }

    /**
     * @param string $lastLine
     */
    public function setLastLine($lastLine)
    {
        $this->lastLine = $lastLine;
    }

    /**
     * @return string
     */
    public function getLastLine()
    {
        return $this->lastLine;
    }

    /**
     * @param string $secondary
     */
    public function setSecondary($secondary)
    {
        $this->secondary = $secondary;
    }

    /**
     * @return string
     */
    public function getSecondary()
    {
        return $this->secondary;
    }

    /**
     * @param string $state
     */
    public function setState($state)
    {
        $this->state = $state;
    }

    /**
     * @return string
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * @param string $street
     */
    public function setStreet($street)
    {
        $this->street = $street;
    }

    /**
     * @return string
     */
    public function getStreet()
    {
        return $this->street;
    }

    /**
     * @param string $street2
     */
    public function setStreet2($street2)
    {
        $this->street2 = $street2;
    }

    /**
     * @return string
     */
    public function getStreet2()
    {
        return $this->street2;
    }

    /**
     * @param string $urbanization
     */
    public function setUrbanization($urbanization)
    {
        $this->urbanization = $urbanization;
    }

    /**
     * @return string
     */
    public function getUrbanization()
    {
        return $this->urbanization;
    }

    /**
     * @param string $zipcode
     */
    public function setZipcode($zipcode)
    {
        $this->zipcode = $zipcode;
    }

    /**
     * @return string
     */
    public function getZipcode()
    {
        return $this->zipcode;
    }

}

