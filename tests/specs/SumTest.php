<?php

namespace Tests;

use PHPUnit\Framework\TestCase;

class SumTest extends TestCase
{
    public function testSum()
    {
        $sumClass = new \App\Sum();
        $sum = $sumClass->execute(1, 2);
        $this->assertEquals(3, $sum);
    }

    public function testNegativeSum()
    {
        $sumClass = new \App\Sum();
        $sum = $sumClass->execute(-1, -2);
        $this->assertEquals(-3, $sum);
    }

}