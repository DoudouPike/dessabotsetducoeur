<?php

namespace CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Advert
 *
 * @ORM\Table(name="advert")
 * @ORM\Entity(repositoryClass="CoreBundle\Repository\AdvertRepository")
 */
class Advert
{
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
     * @ORM\Column(name="description", type="text", length=2047)
     */
    private $descriptionToAdopt;

    /**
     * @var string
     *
     * @ORM\Column(name="description_adopted", type="text", length=2047, nullable=true)
     */
    private $descriptionAdopted;

    /**
     * @var bool
     *
     * @ORM\Column(name="adopted", type="boolean")
     */
    private $adopted;

    /**
     * @var bool
     *
     * @ORM\Column(name="active", type="boolean")
     */
    private $active;


    /**
     * Get id
     *
     * @return int
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
     * @return Advert
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
     * Set description
     *
     * @param string $descriptionToAdopt
     *
     * @return Advert
     */
    public function setDescriptionToAdopt($$descriptionToAdopt)
    {
        $this->$descriptionToAdopt = $$descriptionToAdopt;

        return $this;
    }

    /**
     * Get $descriptionToAdopt
     *
     * @return string
     */
    public function getDescriptionToAdopt()
    {
        return $this->$descriptionToAdopt;
    }

    /**
     * Set descriptionAdopted
     *
     * @param string $descriptionAdopted
     *
     * @return Advert
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
     * Set adopted
     *
     * @param boolean $adopted
     *
     * @return Advert
     */
    public function setAdopted($adopted)
    {
        $this->adopted = $adopted;

        return $this;
    }

    /**
     * Get adopted
     *
     * @return bool
     */
    public function getAdopted()
    {
        return $this->adopted;
    }

    /**
     * Set active
     *
     * @param boolean $active
     *
     * @return Advert
     */
    public function setActive($active)
    {
        $this->active = $active;

        return $this;
    }

    /**
     * Get active
     *
     * @return bool
     */
    public function getActive()
    {
        return $this->active;
    }
}

