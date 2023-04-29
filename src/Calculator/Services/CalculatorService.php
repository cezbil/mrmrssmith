<?php

namespace App\Calculator\Services;

use App\Calculator\Logic\Addition;
use App\Calculator\Logic\Division;
use App\Calculator\Logic\Multiplication;
use App\Calculator\Logic\Subtraction;

class CalculatorService
{
    /**
     * @param  float  $valueOne
     * @param  float  $valueTwo
     * @param  string  $operation
     *
     * @return float
     */
    public function calculate(float $valueOne, float $valueTwo, string $operation): float
    {
        $operationClass = match ($operation) {
            'plus' => new Addition(),
            'minus' => new Subtraction(),
            'multiplication' => new Multiplication(),
            'division' => new Division(),
            default => throw new \InvalidArgumentException('Invalid operation'),
        };
        return $operationClass->calculate($valueOne, $valueTwo);
    }
}
