<?php

namespace KIJ\Bundle\EcbBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('KIJEcbBundle:Default:index.html.twig', array('name' => $name));
    }
}
