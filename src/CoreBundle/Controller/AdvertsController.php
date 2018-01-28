<?php

namespace CoreBundle\Controller;

use CoreBundle\Entity\Adverts;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class AdvertsController extends Controller
{
    /**
     * @Route(path="/chevaux/a_adopter", name="Adverts_toAdopt")
     */
    public function listAction()
    {
        $em = $this->getDoctrine()->getManager();
        $categories = $em->getRepository('CoreBundle:Categories')->find(1);
        $adverts_list = $em->getRepository('CoreBundle:Adverts')->findBy(['category' => $categories]);
        return $this->render('CoreBundle:adverts:list.html.twig', [
            'adverts_list' => $adverts_list
        ]);
    }

    /**
     * @Route(path="/chevaux/ajouter", name="Adverts_create")
     */
    public function addAction()
    {
        $em = $this->getDoctrine()->getManager();

        $advert = new Adverts();
        $advert->setName('CACA');
        $advert->setDescriptionToAdopt('CACA');
        $advert->setPublished(true);

        $categories = $em->getRepository('CoreBundle:Categories')->find(1);
        $advert->setCategory($categories);

        $em->persist($advert);
        $em->flush();

        return $this->redirectToRoute('Adverts_toAdopt');
    }
}
