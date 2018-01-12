<?php

namespace CoreBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class AdvertController extends Controller
{
    public function indexAction()
    {
        return $this->render('CoreBundle:advert:index.html.twig');
    }
}
