<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction()
    {   
        $articles = [
            [
                'q_name' => 'reagir_avec_react_js',
                'route_name' => 'reagir_avec_react_js',
            ],
            [
                'q_name' => 'nouveautes_php_5_6',
                'route_name' => 'nouveautes_php_5_6',
            ],
            [
                'q_name' => 'data_bindons_avec_angular_js',
                'route_name' => 'data_bindons_avec_angular_js',
            ],
            [
                'q_name' => 'nouveautes_php_5_5',
                'route_name' => 'nouveautes_php_5_5',
            ],
            [
                'q_name' => 'api_google_maps',
                'route_name' => 'api_google_maps',
            ],
            [
                'q_name' => 'dessinons_devmed_en_css3',
                'route_name' => 'dessinons_devmed_en_css3',
            ],
        ];
        // replace this example code with whatever you need
        return $this->render('default/index.html.twig', [
            'articles' => $articles,
        ]);
    }
}
