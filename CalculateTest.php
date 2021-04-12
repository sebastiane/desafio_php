<?php

require 'Calculate.php';
use PHPUnit\Framework\TestCase;

class CalculateTest extends TestCase
{
    protected $Calculate;

    public function testOutput()
    {
        $this->Calculate = new Calculate();
        $this->assertTrue($this->Calculate->process());

    }


}
