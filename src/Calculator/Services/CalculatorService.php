<?php

namespace App\Calculator\Services;

use App\Calculator\Interfaces\OperationInterface;

class CalculatorService
{
    public function __construct(private readonly OperationInterface $operation)
    {
    }

    /**
     * @param  float  $valueOne
     * @param  float  $valueTwo
     *
     * @return float
     */
    public function calculate(float $valueOne, float $valueTwo): float
    {
        return $this->operation->calculate($valueOne, $valueTwo);
    }

    /**
     * @return OperationInterface
     */
    public function getOperation(): OperationInterface
    {
        return $this->operation;
    }
}
