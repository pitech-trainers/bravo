<?php

namespace Shop\BookshopBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="Shop\BookshopBundle\Entity\Repository\ProductRepository")
 * @ORM\Table(name="product")
 */
class Product
{

    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @ORM\Column(type="string")
     */
    protected $title;

    /**
     * @ORM\ManyToOne(targetEntity="Categories", inversedBy="products")
     * @ORM\JoinColumn(name="category_id", referencedColumnName="id")
     */
    protected $category;

    /**
     * @ORM\OneToMany(targetEntity="CartItem", mappedBy="product")
     */
    protected $cartItem;
    
    /**
     *
     * @ORM\Column(type="integer") 
     */
    protected $price;

    /**
     * @ORM\ManyToOne(targetEntity="Author", inversedBy="product")
     * @ORM\JoinColumn(name="author_id", referencedColumnName="id")
     */
    protected $author;

    /**
     *
     * @ORM\Column(type="integer", length=13) 
     *
     */
    protected $isbn;

    /**
     *
     * @ORM\Column(type="integer") 
     */
    protected $appereance_year;

    /**
     * @ORM\Column(type="text")
     */
    protected $description;

    /**
     * @ORM\Column(type="string", length=100)
     */
    protected $short_description;

    /**
     *
     * @ORM\Column(type="integer") 
     */
    protected $stock;

    /**
     * 
     * @ORM\Column(type="integer") 
     */
    protected $active;

    /**
     *
     * @ORM\Column(type="string") 
     */
    protected $image;

    

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
     * Set title
     *
     * @param string $title
     * @return Product
     */
    public function setTitle($title)
    {
        $this->title = $title;
    
        return $this;
    }

    /**
     * Get title
     *
     * @return string 
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set price
     *
     * @param integer $price
     * @return Product
     */
    public function setPrice($price)
    {
        $this->price = $price;
    
        return $this;
    }

    /**
     * Get price
     *
     * @return integer 
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * Set isbn
     *
     * @param integer $isbn
     * @return Product
     */
    public function setIsbn($isbn)
    {
        $this->isbn = $isbn;
    
        return $this;
    }

    /**
     * Get isbn
     *
     * @return integer 
     */
    public function getIsbn()
    {
        return $this->isbn;
    }

    /**
     * Set appereance_year
     *
     * @param integer $appereanceYear
     * @return Product
     */
    public function setAppereanceYear($appereanceYear)
    {
        $this->appereance_year = $appereanceYear;
    
        return $this;
    }

    /**
     * Get appereance_year
     *
     * @return integer 
     */
    public function getAppereanceYear()
    {
        return $this->appereance_year;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return Product
     */
    public function setDescription($description)
    {
        $this->description = $description;
    
        return $this;
    }

    /**
     * Get description
     *
     * @return string 
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set short_description
     *
     * @param string $shortDescription
     * @return Product
     */
    public function setShortDescription($shortDescription)
    {
        $this->short_description = $shortDescription;
    
        return $this;
    }

    /**
     * Get short_description
     *
     * @return string 
     */
    public function getShortDescription()
    {
        return $this->short_description;
    }

    /**
     * Set stock
     *
     * @param integer $stock
     * @return Product
     */
    public function setStock($stock)
    {
        $this->stock = $stock;
    
        return $this;
    }

    /**
     * Get stock
     *
     * @return integer 
     */
    public function getStock()
    {
        return $this->stock;
    }

    /**
     * Set active
     *
     * @param integer $active
     * @return Product
     */
    public function setActive($active)
    {
        $this->active = $active;
    
        return $this;
    }

    /**
     * Get active
     *
     * @return integer 
     */
    public function getActive()
    {
        return $this->active;
    }

    /**
     * Set image
     *
     * @param string $image
     * @return Product
     */
    public function setImage($image)
    {
        $this->image = $image;
    
        return $this;
    }

    /**
     * Get image
     *
     * @return string 
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * Set category
     *
     * @param \Shop\BookshopBundle\Entity\Categories $category
     * @return Product
     */
    public function setCategory(\Shop\BookshopBundle\Entity\Categories $category = null)
    {
        $this->category = $category;
    
        return $this;
    }

    /**
     * Get category
     *
     * @return \Shop\BookshopBundle\Entity\Categories 
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * Set cartItem
     *
     * @param \Shop\BookshopBundle\Entity\CartItem $cartItem
     * @return Product
     */
    public function setCartItem(\Shop\BookshopBundle\Entity\CartItem $cartItem = null)
    {
        $this->cartItem = $cartItem;
    
        return $this;
    }

    /**
     * Get cartItem
     *
     * @return \Shop\BookshopBundle\Entity\CartItem 
     */
    public function getCartItem()
    {
        return $this->cartItem;
    }

    /**
     * Set author
     *
     * @param \Shop\BookshopBundle\Entity\Author $author
     * @return Product
     */
    public function setAuthor(\Shop\BookshopBundle\Entity\Author $author = null)
    {
        $this->author = $author;
    
        return $this;
    }

    /**
     * Get author
     *
     * @return \Shop\BookshopBundle\Entity\Author 
     */
    public function getAuthor()
    {
        return $this->author;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->cartItem = new \Doctrine\Common\Collections\ArrayCollection();
    }
    
    /**
     * Add cartItem
     *
     * @param \Shop\BookshopBundle\Entity\CartItem $cartItem
     * @return Product
     */
    public function addCartItem(\Shop\BookshopBundle\Entity\CartItem $cartItem)
    {
        $this->cartItem[] = $cartItem;
    
        return $this;
    }

    /**
     * Remove cartItem
     *
     * @param \Shop\BookshopBundle\Entity\CartItem $cartItem
     */
    public function removeCartItem(\Shop\BookshopBundle\Entity\CartItem $cartItem)
    {
        $this->cartItem->removeElement($cartItem);
    }
}