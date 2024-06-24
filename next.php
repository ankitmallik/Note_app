<?php

class calculate
{
    public $a,$b,$c;

    function fruit()
    {
        $this->c = $this->a + $this->b;
        return $this->c;
    }
}

$c1 = new calculate();
$c1->a = 50;
$c1->b = 50;

echo $c1->fruit();