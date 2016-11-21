<?php

namespace AppBundle\Controller\Article\AngularJs;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;


class AngularJsController extends Controller
{
    /**
     * @Route("/data-bindons-avec-angular-js", name="data_bindons_avec_angular_js")
     */
    public function indexAction()
    {
        // replace this example code with whatever you need
        return $this->render('article/angularJs/data_bindons_avec_angular_js.html.twig');
    }
}
