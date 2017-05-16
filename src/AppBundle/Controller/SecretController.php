<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class SecretController extends Controller
{
    /**
     * @Route("/secret")
     * @
     */
    public function indexAction()
    {
        return $this->render('AppBundle:Secret:index.html.twig', array(
            // ...
        ));
    }

}
