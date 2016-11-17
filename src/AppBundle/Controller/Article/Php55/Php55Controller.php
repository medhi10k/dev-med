<?php

namespace AppBundle\Controller\Article\Php55;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;


class Php55Controller extends Controller
{
    /**
     * @Route("/nouveautes-php-5-5", name="nouveautes_php_5_5")
     */
    public function indexAction()
    {   
        // replace this example code with whatever you need
        return $this->render('article/php55/index.html.twig', [
        	'experimentation1' => '',
            'experimentation2' => $this->get('app.php55experimentation')->experimentation2(),
        	'experimentation3' => $this->get('app.php55experimentation')->experimentation3(),
        ]);
    }
}
