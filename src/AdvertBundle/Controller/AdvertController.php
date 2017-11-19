<?php

namespace AdvertBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class AdvertController extends Controller
{
    public function indexAction()
    {
        return $this->render('AdvertBundle:index.html.twig');
    }
}
