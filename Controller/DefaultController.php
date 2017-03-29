<?php

namespace Xandrusoft\DashboardBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('XandrusoftDashboardBundle:Default:index.html.twig');
    }
}
