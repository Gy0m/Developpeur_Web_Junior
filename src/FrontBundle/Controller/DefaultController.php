<?php

namespace FrontBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="index")
     */
    public function indexAction()
    {
        return $this->render('FrontBundle:Default:index.html.twig');
    }

    /**
     * @Route("/generic", name="generic")
     */
    public function genericAction()
    {
        return $this->render('FrontBundle:Default:generic.html.twig');
    }

    /**
     * @Route("/elements", name="elements")
     */
    public function elementsAction()
    {
        return $this->render('FrontBundle:Default:elements.html.twig');
    }
}
