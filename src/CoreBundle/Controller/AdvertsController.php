<?php

namespace CoreBundle\Controller;

use CoreBundle\Entity\Adverts;
use CoreBundle\Form\AdvertsType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;

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

}
