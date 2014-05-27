<?php

namespace Mocean\MoceanBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('MoceanMoceanBundle:Default:index.html.twig', array('name' => $name));
    }
}
