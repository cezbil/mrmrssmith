<?php

// src/Calculator/Logic/Division.php

namespace App\Calculator\Logic;

use App\Calculator\Interfaces\OperationInterface;
use InvalidArgumentException;

class Division implements OperationInterface
{
    /**
     * @param  float  $valueOne
     * @param  float  $valueTwo
     *
     * @return float
     */
    public function calculate(float $valueOne, float $valueTwo): float
    {
        if ($valueTwo == 0) {
            throw new InvalidArgumentException('Please do not divide by 0!');
        }
        return $valueOne / $valueTwo;
    }
}
