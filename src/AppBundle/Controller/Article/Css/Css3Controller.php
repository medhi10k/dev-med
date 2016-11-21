<?php

namespace AppBundle\Controller\Article\Css;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;


class Css3Controller extends Controller
{
    /**
     * @Route("/dessinons-devmed-en-css3", name="dessinons_devmed_en_css3")
     */
    public function indexAction()
    {   
        return $this->render('article/css/dessinons_devmed_en_css3.html.twig');
    }
}
