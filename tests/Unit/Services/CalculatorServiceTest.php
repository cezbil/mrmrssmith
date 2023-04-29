<?php

// tests/Unit/Services/CalculatorServiceTest.php
namespace App\Tests\Unit\Services;

use App\Calculator\Interfaces\OperationInterface;
use App\Calculator\Services\CalculatorService;
use PHPUnit\Framework\TestCase;

class CalculatorServiceTest extends TestCase
{
    public function testAddition(): void
    {
        $additionMock = $this->createMock(OperationInterface::class);
        $additionMock->expects($this->once())
            ->method('calculate')
            ->with(10, 20)
            ->willReturn(30.0);

        $calculatorService = new CalculatorService($additionMock);
        $result = $calculatorService->calculate(10, 20);
        $this->assertSame(30.0, $result);
    }

    public function testSubtraction(): void
    {
        $subtractionMock = $this->createMock(OperationInterface::class);
        $subtractionMock->expects($this->once())
            ->method('calculate')
            ->with(30, 10)
            ->willReturn(20.0);

        $calculatorService = new CalculatorService($subtractionMock);
        $result = $calculatorService->calculate(30, 10);
        $this->assertSame(20.0, $result);
    }

    public function testMultiplication(): void
    {
        $multiplicationMock = $this->createMock(OperationInterface::class);
        $multiplicationMock->expects($this->once())
            ->method('calculate')
            ->with(5, 5)
            ->willReturn(25.0);

        $calculatorService = new CalculatorService($multiplicationMock);
        $result = $calculatorService->calculate(5, 5);
        $this->assertSame(25.0, $result);
    }
    public function testDivision(): void
    {
        $divisionMock = $this->createMock(OperationInterface::class);
        $divisionMock->expects($this->once())
            ->method('calculate')
            ->with(20, 5)
            ->willReturn(4.0);

        $calculatorService = new CalculatorService($divisionMock);
        $result = $calculatorService->calculate(20, 5);
        $this->assertSame(4.0, $result);
    }

}
