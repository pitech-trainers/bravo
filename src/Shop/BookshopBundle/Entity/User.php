<?php

namespace Shop\BookshopBundle\Entity;

use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="Shop\BookshopBundle\Entity\Repository\UserRepository")
 * @ORM\Table(name="fos_user")
 */
class User extends BaseUser
{

    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     *
     * @ORM\Column(type="string")
     */
    protected $firstname;

    /**
     *
     * @ORM\Column(type="string")
     */
    protected $lastname;

    /**
     *
     * @ORM\Column(type="integer", length=9)
     */
    protected $phone;

    /**
     *
     * @ORM\Column(type="integer", length=1)
     */
    protected $gender;

    /**
     *
     *  @ORM\Column(type="integer")
     */
    protected $billing_address_id;

    /**
     *
     *  @ORM\Column(type="integer")
     */
    protected $shipping_address_id;

    public function __construct()
    {
        parent::__construct();
    }



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
     * Set firstname
     *
     * @param string $firstname
     * @return User
     */
    public function setFirstname($firstname)
    {
        $this->firstname = $firstname;
    
        return $this;
    }

    /**
     * Get firstname
     *
     * @return string 
     */
    public function getFirstname()
    {
        return $this->firstname;
    }

    /**
     * Set lastname
     *
     * @param string $lastname
     * @return User
     */
    public function setLastname($lastname)
    {
        $this->lastname = $lastname;
    
        return $this;
    }

    /**
     * Get lastname
     *
     * @return string 
     */
    public function getLastname()
    {
        return $this->lastname;
    }

    /**
     * Set phone
     *
     * @param integer $phone
     * @return User
     */
    public function setPhone($phone)
    {
        $this->phone = $phone;
    
        return $this;
    }

    /**
     * Get phone
     *
     * @return integer 
     */
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * Set gender
     *
     * @param integer $gender
     * @return User
     */
    public function setGender($gender)
    {
        $this->gender = $gender;
    
        return $this;
    }

    /**
     * Get gender
     *
     * @return integer 
     */
    public function getGender()
    {
        return $this->gender;
    }

    /**
     * Set billing_address_id
     *
     * @param integer $billingAddressId
     * @return User
     */
    public function setBillingAddressId($billingAddressId)
    {
        $this->billing_address_id = $billingAddressId;
    
        return $this;
    }

    /**
     * Get billing_address_id
     *
     * @return integer 
     */
    public function getBillingAddressId()
    {
        return $this->billing_address_id;
    }

    /**
     * Set shipping_address_id
     *
     * @param integer $shippingAddressId
     * @return User
     */
    public function setShippingAddressId($shippingAddressId)
    {
        $this->shipping_address_id = $shippingAddressId;
    
        return $this;
    }

    /**
     * Get shipping_address_id
     *
     * @return integer 
     */
    public function getShippingAddressId()
    {
        return $this->shipping_address_id;
    }
}