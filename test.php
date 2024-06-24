<?php

class calculate
{
    public $a,$b,$c;

    function sum()
    {
        $this->c = $this->a + $this->b;
        return $this->c;
    }
    function sub()
    {
        $this->c = $this->a - $this->b;
        return $this->c;
    }
    function mul()
    {
        $this->c = $this->a * $this->b;
        return $this->c;
    }
}

$c1 = new calculate();

$c1->a= 50;
$c1->b= 50;

echo "</br>". $c1->sum();

$c2 = new calculate();

$c2->a= 50;
$c2->b= 50;

echo "</br>". $c1->sub();

$c3 = new calculate();

$c3->a= 50;
$c3->b= 50;

echo "</br>". $c1->mul();

