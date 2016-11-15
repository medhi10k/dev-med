<?php

namespace AppBundle\Controller\Article\ReactJs;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;


class ReactJsController extends Controller
{
    /**
     * @Route("/reagir-avec-react-js", name="reagir_avec_react_js")
     */
    public function indexAction()
    {
        // replace this example code with whatever you need
        return $this->render('article/reactJs/index.html.twig');
    }
}
