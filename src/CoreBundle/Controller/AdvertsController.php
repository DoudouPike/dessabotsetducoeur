<?php

namespace CoreBundle\Controller;

use CoreBundle\Entity\Adverts;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class AdvertsController extends Controller
{
    public function indexAction()
    {
        return $this->render('CoreBundle:adverts:index.html.twig');
    }

    /**
     * @Route(path="/chevaux/a_adopter", name="Adverts_list")
     */
    public function listAction()
    {
        $em = $this->getDoctrine()->getManager();
        $adverts = $em->getRepository('CoreBundle:Adverts')->findAll();
        return $this->render('CoreBundle:adverts:list.html.twig', [
            'adverts' => $adverts
        ]);
    }

    /**
     * @Route(path="/chevaux/ajouter", name="Adverts_create")
     */
    public function addAction()
    {
        $em = $this->getDoctrine()->getManager();

        $advert = new Adverts();
        $advert->setName('Annonce test');
        $advert->setDescriptionToAdopt('Description dispo adoption');
        $advert->setPublished(true);

        $categories = $em->getRepository('CoreBundle:Categories')->find(1);
        $advert->setCategories($categories);

        $em->persist($advert);
        $em->flush();

        return $this->redirectToRoute('Adverts_list');
    }
}
