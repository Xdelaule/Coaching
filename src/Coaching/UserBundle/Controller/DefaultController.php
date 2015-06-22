<?php

namespace Coaching\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('CoachingUserBundle:Default:index.html.twig', array('name' => $name));
    }
}
