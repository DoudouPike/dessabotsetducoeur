<?php

namespace CoreBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class CoreController extends Controller
{
    /**
     * @Route(path="/", name="Core_index")
     */
    public function indexAction()
    {
        return $this->render('CoreBundle::index.html.twig');
    }

    /**
     * @Route(path="/ajax", name="Core_ajax")
     */
    public function ajaxAction()
    {
        return $this->render('CoreBundle::ajax.html.twig');
    }
}
