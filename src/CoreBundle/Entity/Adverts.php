<?php

namespace CoreBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

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
     *
     * @Assert\NotBlank()
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="description_initial", type="text", length=2047)
     */
    private $descriptionInitial;

    /**
     * @var string
     *
     * @ORM\Column(name="description_complete", type="text", length=2047, nullable=true)
     */
    private $descriptionComplete;

    /**
     * @var string
     *
     * @ORM\Column(name="description_deceased", type="text", length=2047, nullable=true)
     */
    private $descriptionDeceased;

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
     * @var Categories
     *
     * @ORM\ManyToOne(targetEntity="CoreBundle\Entity\Categories")
     * @ORM\JoinColumn(nullable=false)
     */
    private $category;

    /**
     * @var Images
     *
     * @ORM\ManyToMany(targetEntity="CoreBundle\Entity\Images", cascade={"persist"})
     */
    private $images;


    /** ---------- FUNCTIONS ---------- **/

    /**
     * Adverts constructor.
     */
    public function __construct()
    {
        $this->dateCreation = new \DateTime();
        $this->images = new ArrayCollection();
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
     * @return string
     */
    public function getDescriptionInitial()
    {
        return $this->descriptionInitial;
    }

    /**
     * @param string $descriptionInitial
     */
    public function setDescriptionInitial($descriptionInitial)
    {
        $this->descriptionInitial = $descriptionInitial;
    }

    /**
     * @return string
     */
    public function getDescriptionComplete()
    {
        return $this->descriptionComplete;
    }

    /**
     * @param string $descriptionComplete
     */
    public function setDescriptionComplete($descriptionComplete)
    {
        $this->descriptionComplete = $descriptionComplete;
    }

    /**
     * @return string
     */
    public function getDescriptionDeceased()
    {
        return $this->descriptionDeceased;
    }

    /**
     * @param string $descriptionDeceased
     */
    public function setDescriptionDeceased($descriptionDeceased)
    {
        $this->descriptionDeceased = $descriptionDeceased;
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

    /**
     * @return Images
     */
    public function getImages()
    {
        return $this->images;
    }

    /**
     * @param Images $image
     */
    public function addImage(Images $image)
    {
        $this->images[] = $image;
    }

    /**
     * @param Images $image
     */
    public function removeImage(Images $image)
    {
        $this->images->removeElement($image);
    }
}
