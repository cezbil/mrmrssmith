<?php

// src/Tests/Logic/AdditionTest.php

namespace App\Tests\Unit\Logic;

use App\Calculator\Logic\Multiplication;
use PHPUnit\Framework\TestCase;

class MultiplicationTest extends TestCase
{
    public function testCalculate(): void
    {
        $multiplication = new Multiplication();
        $result = $multiplication->calculate(5, 5);
        $this->assertSame(25.0, $result);
    }
}
