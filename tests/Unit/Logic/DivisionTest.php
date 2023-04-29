<?php

// src/Tests/Logic/AdditionTest.php

namespace App\Tests\Unit\Logic;

use App\Calculator\Logic\Division;
use PHPUnit\Framework\TestCase;

class DivisionTest extends TestCase
{
    public function testCalculate(): void
    {
        $division = new Division();
        $result = $division->calculate(20, 5);
        $this->assertSame(4.0, $result);
    }

    public function testDivisionByZero(): void
    {
        $division = new Division();
        $this->expectException(\InvalidArgumentException::class);
        $division->calculate(20, 0);
    }
}
