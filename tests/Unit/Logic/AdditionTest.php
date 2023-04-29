<?php

// src/Tests/Logic/AdditionTest.php

namespace App\Tests\Unit\Logic;

use App\Calculator\Logic\Addition;
use PHPUnit\Framework\TestCase;

class AdditionTest extends TestCase
{
    public function testCalculate(): void
    {
        $addition = new Addition();
        $result = $addition->calculate(10, 20);
        $this->assertSame(30.0, $result);
    }
}
