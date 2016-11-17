<?php

namespace AppBundle\Experimentation\Php55;

class Php55Experimentation
{
    public function experimentation1($start, $limit, $step = 1) 
    {
	    for ($i = $start; $i <= $limit; $i += $step) {
	        yield $i;
	    }
    }

    public function experimentation2() 
    {
	    $frameworks = [
		   'php' => ['Symfony', 'Zend'],
		   'python' => ['Django', 'Pyramid '],
		   'java' => ['Hibernate', 'Spring'],
		];

		$string = '';
		foreach ($frameworks as list($first, $second)) {
		    $string .= '1:' .$first.' - 2:'. $second.'<br \>';
		}

		return $string;
    }

    public function experimentation3() 
    {
		if (empty($this->isJavaBetterThanPhp())) {
		    return 'hey oui on le sait tous ^^.';
		}

		return ';-)';
    }

    private function isJavaBetterThanPhp() 
    {
    	return false;
    }
}
