<?php

namespace CoreBundle\DataFixtures\ORM;

use CoreBundle\Entity\Categories;
use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use CoreBundle\Entity\Category;

class LoadCategories implements FixtureInterface
{
    // Dans l'argument de la méthode load, l'objet $manager est l'EntityManager
    public function load(ObjectManager $manager)
    {
        // Liste des noms de catégorie à ajouter
        $names = array(
            'to_adopt',
            'to_sponsor',
            'adopted_sponsored',
            'deceased'
        );

        foreach ($names as $name) {
            // On crée la catégorie
            $category = new Categories();
            $category->setName($name);

            // On la persiste
            $manager->persist($category);
        }

        // On déclenche l'enregistrement de toutes les catégories
        $manager->flush();
    }
}