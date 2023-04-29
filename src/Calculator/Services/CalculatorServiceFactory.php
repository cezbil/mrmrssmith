<?php

namespace App\Calculator\Services;

use App\Calculator\Logic\Addition;
use App\Calculator\Logic\Division;
use App\Calculator\Logic\Multiplication;
use App\Calculator\Logic\Subtraction;

class CalculatorServiceFactory
{
    public static function create(string $operation): CalculatorService
    {
        $operationClass = match ($operation) {
            'plus' => new Addition(),
            'minus' => new Subtraction(),
            'multiplication' => new Multiplication(),
            'division' => new Division(),
            default => throw new \InvalidArgumentException('Invalid operation'),
        };

        return new CalculatorService($operationClass);
    }
}
