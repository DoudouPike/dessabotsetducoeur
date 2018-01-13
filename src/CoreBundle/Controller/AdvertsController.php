<?php

namespace CoreBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class AdvertsController extends Controller
{
    public function indexAction()
    {
        return $this->render('CoreBundle:advert:index.html.twig');
    }
}
