<?php

namespace AppBundle\Experimentation\Php55;

class Php55Experimentation
{
    public function experimentation1($start, $limit, $step = 1) {
	    for ($i = $start; $i <= $limit; $i += $step) {
	        yield $i;
	    }
    }

    public function experimentation2($start, $limit, $step = 1) {
	    $array = [
		    [1, 2],
		    [3, 4],
		];

		foreach ($array as list($a, $b)) {
		    echo "A: $a; B: $b\n";
		}
    }
}
