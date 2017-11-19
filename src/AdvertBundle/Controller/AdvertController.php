<?php

namespace AdvertBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class AdvertController extends Controller
{
    public function indexAction()
    {
        return $this->render('AdvertBundle:index.html.twig');
    }
}
