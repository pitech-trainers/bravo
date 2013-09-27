<?php

namespace Shop\BookshopBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="authors")
 */
class Author {

    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;
    
     /**
     * @ORM\Column(type="string")
     */
    protected $author_name;

    
   /**
     * @ORM\OneToMany(targetEntity="Product", mappedBy="author")
     */
    protected $product;


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
     * Set author_name
     *
     * @param string $authorName
     * @return Author
     */
    public function setAuthorName($authorName)
    {
        $this->author_name = $authorName;
    
        return $this;
    }

    /**
     * Get author_name
     *
     * @return string 
     */
    public function getAuthorName()
    {
        return $this->author_name;
    }

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->product = new \Doctrine\Common\Collections\ArrayCollection();
    }
    
    /**
     * Add product
     *
     * @param \Shop\BookshopBundle\Entity\Product $product
     * @return Author
     */
    public function addProduct(\Shop\BookshopBundle\Entity\Product $product)
    {
        $this->product[] = $product;
    
        return $this;
    }

    /**
     * Remove product
     *
     * @param \Shop\BookshopBundle\Entity\Product $product
     */
    public function removeProduct(\Shop\BookshopBundle\Entity\Product $product)
    {
        $this->product->removeElement($product);
    }

    /**
     * Get product
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getProduct()
    {
        return $this->product;
    }
}