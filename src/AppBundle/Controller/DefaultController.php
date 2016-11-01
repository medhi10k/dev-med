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
    public function indexAction(Request $request)
    {   
        $articles = [
            ['q_name' => 'test'],
            ['q_name' => 'test2'],
            ['q_name' => 'test3'],
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
