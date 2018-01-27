<?php

namespace CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Adverts
 *
 * @ORM\Table(name="adverts")
 * @ORM\Entity(repositoryClass="CoreBundle\Repository\AdvertsRepository")
 * @ORM\HasLifecycleCallbacks()
 */
class Adverts
{
    /** ---------- PROPERTIES ---------- **/

    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="description_to_adopt", type="text", length=2047)
     */
    private $descriptionToAdopt;

    /**
     * @var string
     *
     * @ORM\Column(name="description_adopted", type="text", length=2047, nullable=true)
     */
    private $descriptionAdopted;

    /**
     * @var string
     *
     * @ORM\Column(name="date_creation", type="datetime")
     */
    private $dateCreation;

    /**
     * @var string
     *
     * @ORM\Column(name="date_adopted", type="datetime", nullable=true)
     */
    private $dateAdopted;

    /**
     * @var bool
     *
     * @ORM\Column(name="active", type="boolean")
     */
    private $published;

    /**
     * @ORM\ManyToOne(targetEntity="CoreBundle\Entity\Categories")
     * @ORM\JoinColumn(nullable=false)
     */
    private $category;


    /** ---------- GETTER & SETTER ---------- **/

    /**
     * Adverts constructor.
     */
    public function __construct()
    {
        $this->dateCreation = new \DateTime();
    }

    /** ---------- GETTER & SETTER ---------- **/

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
     * Set name
     *
     * @param string $name
     *
     * @return Adverts
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set descriptionToAdopt
     *
     * @param string $descriptionToAdopt
     *
     * @return Adverts
     */
    public function setDescriptionToAdopt($descriptionToAdopt)
    {
        $this->descriptionToAdopt = $descriptionToAdopt;

        return $this;
    }

    /**
     * Get descriptionToAdopt
     *
     * @return string
     */
    public function getDescriptionToAdopt()
    {
        return $this->descriptionToAdopt;
    }

    /**
     * Set descriptionAdopted
     *
     * @param string $descriptionAdopted
     *
     * @return Adverts
     */
    public function setDescriptionAdopted($descriptionAdopted)
    {
        $this->descriptionAdopted = $descriptionAdopted;

        return $this;
    }

    /**
     * Get descriptionAdopted
     *
     * @return string
     */
    public function getDescriptionAdopted()
    {
        return $this->descriptionAdopted;
    }

    /**
     * Get dateCreation
     *
     * @return \DateTime
     */
    public function getDateCreation()
    {
        return $this->dateCreation;
    }

    /**
     * Set dateAdopted
     *
     * @param \DateTime $dateAdopted
     *
     * @return Adverts
     */
    public function setDateAdopted($dateAdopted)
    {
        $this->dateAdopted = $dateAdopted;

        return $this;
    }

    /**
     * Get dateAdopted
     *
     * @return \DateTime
     */
    public function getDateAdopted()
    {
        return $this->dateAdopted;
    }


    /**
     * Set published
     *
     * @param boolean $published
     *
     * @return Adverts
     */
    public function setPublished($published)
    {
        $this->published = $published;

        return $this;
    }

    /**
     * Get published
     *
     * @return boolean
     */
    public function getPublished()
    {
        return $this->published;
    }

    /**
     * Get categories
     *
     * @return \CoreBundle\Entity\Categories
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * Set category
     *
     * @param \CoreBundle\Entity\Categories $category
     *
     * @return Adverts
     */
    public function setCategory(Categories $category)
    {
        $this->category = $category;
        return $this;
    }
}
