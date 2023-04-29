<?php

// tests/Unit/Services/CalculatorServiceFactoryTest.php
namespace App\Tests\Unit\Services;

use App\Calculator\Logic\Addition;
use App\Calculator\Logic\Division;
use App\Calculator\Logic\Multiplication;
use App\Calculator\Logic\Subtraction;
use App\Calculator\Services\CalculatorService;
use App\Calculator\Services\CalculatorServiceFactory;
use PHPUnit\Framework\TestCase;

class CalculatorServiceFactoryTest extends TestCase
{
    public function testCreateAdditionService(): void
    {
        $calculatorService = CalculatorServiceFactory::create('plus');
        $this->assertInstanceOf(CalculatorService::class, $calculatorService);
        $this->assertInstanceOf(Addition::class, $calculatorService->getOperation());
    }

    public function testCreateSubtractionService(): void
    {
        $calculatorService = CalculatorServiceFactory::create('minus');
        $this->assertInstanceOf(CalculatorService::class, $calculatorService);
        $this->assertInstanceOf(Subtraction::class, $calculatorService->getOperation());
    }

    public function testCreateMultiplicationService(): void
    {
        $calculatorService = CalculatorServiceFactory::create('multiplication');
        $this->assertInstanceOf(CalculatorService::class, $calculatorService);
        $this->assertInstanceOf(Multiplication::class, $calculatorService->getOperation());
    }

    public function testCreateDivisionService(): void
    {
        $calculatorService = CalculatorServiceFactory::create('division');
        $this->assertInstanceOf(CalculatorService::class, $calculatorService);
        $this->assertInstanceOf(Division::class, $calculatorService->getOperation());
    }

    public function testCreateInvalidOperationService(): void
    {
        $this->expectException(\InvalidArgumentException::class);
        CalculatorServiceFactory::create('invalid_operation');
    }

}
