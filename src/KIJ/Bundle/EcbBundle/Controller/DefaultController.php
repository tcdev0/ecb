<?php

namespace KIJ\Bundle\EcbBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        //return $this->render('KIJEcbBundle:Default:index.html.twig', array('name' => $name));
        $this->get('php_mag_ecb.rates')->getRates();
    }
}
