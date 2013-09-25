<?php



namespace Shop\BookshopBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
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
    
    
    protected $category;
    
    
    /**
     *
     * @ORM\Column(type="integer") 
     */
    protected $price;
    
    
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
     * @param \tinyint $active
     * @return Product
     */
    public function setActive(\tinyint $active)
    {
        $this->active = $active;
    
        return $this;
    }

    /**
     * Get active
     *
     * @return \tinyint 
     */
    public function getActive()
    {
        return $this->active;
    }
}