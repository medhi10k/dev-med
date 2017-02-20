<?php

namespace AppBundle\Controller\Article\ApiGoogle;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;


class ApiGoogleController extends Controller
{
    /**
     * @Route("/api-google-maps", name="api_google_maps")
     */
    public function indexAction()
    {
        // replace this example code with whatever you need
        return $this->render('article/apiGoogle/api_google_maps.html.twig');
    }
}
