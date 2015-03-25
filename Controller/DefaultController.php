<?php

namespace JoaoIm\Bundle\WebBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('JoaoImWebBundle:Default:index.html.twig', array('name' => $name));
    }
}
