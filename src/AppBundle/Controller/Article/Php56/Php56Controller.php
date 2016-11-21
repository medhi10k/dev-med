<?php

namespace AppBundle\Controller\Article\Php56;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;


class Php56Controller extends Controller
{
    /**
     * @Route("/nouveautes-php-5-6", name="nouveautes_php_5_6")
     */
    public function indexAction()
    {   
        return $this->render('article/php56/index.html.twig', [
        	'experimentation1' => $this->get('app.php56experimentation')->experimentation2(),
            'experimentation2' => $this->get('app.php56experimentation')->experimentation2(),
        	'experimentation3' => $this->get('app.php56experimentation')->experimentation3(),
        ]);
    }
}
