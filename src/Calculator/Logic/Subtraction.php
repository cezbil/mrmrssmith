<?php

// src/Calculator/Logic/Subtraction.php

namespace App\Calculator\Logic;

use App\Calculator\Interfaces\OperationInterface;

class Subtraction implements OperationInterface
{
    /**
     * @param  float  $valueOne
     * @param  float  $valueTwo
     *
     * @return float
     */
    public function calculate(float $valueOne, float $valueTwo): float
    {
        return $valueOne - $valueTwo;
    }
}
