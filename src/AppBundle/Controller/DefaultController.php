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
                'q_name' => 'test',
                'route_name' => 'homepage',
            ],
            [
                'q_name' => 'test2',
                'route_name' => 'homepage',
            ],
            [
                'q_name' => 'nouveautes_php_5_5',
                'route_name' => 'nouveautes_php_5_5',
            ],
            [
                'q_name' => 'reagir_avec_react_js',
                'route_name' => 'reagir_avec_react_js',
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
