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
                'q_name' => 'nouveautes_php_5_5',
                'route_name' => 'nouveautes_php_5_5',
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

    /**
     * @Route("/", name="test")
     */
    public function testAction(Request $request)
    {   
       
    }

    /**
     * @Route("/", name="test2")
     */
    public function test2Action(Request $request)
    {   
       
    }

    /**
     * @Route("/", name="test3")
     */
    public function test3Action(Request $request)
    {   
       
    }
}
