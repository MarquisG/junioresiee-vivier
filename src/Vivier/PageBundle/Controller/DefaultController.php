<?php

namespace Vivier\PageBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('VivierPageBundle:Default:index.html.twig');
    }
}
