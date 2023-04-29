<?php

// src/Tests/Logic/AdditionTest.php

namespace App\Tests\Unit\Logic;

use App\Calculator\Logic\Subtraction;
use PHPUnit\Framework\TestCase;

class SubtractionTest extends TestCase
{
    public function testCalculate(): void
    {
        $subtraction = new Subtraction();
        $result = $subtraction->calculate(30, 10);
        $this->assertSame(20.0, $result);
    }
}
