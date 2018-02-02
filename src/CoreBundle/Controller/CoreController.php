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
        return $this->render('CoreBundle:home:index.html.twig');
    }
}
