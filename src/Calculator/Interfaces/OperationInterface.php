<?php

namespace App\Calculator\Interfaces;

interface OperationInterface
{
    /**
     * @param  float  $valueOne
     * @param  float  $valueTwo
     *
     * @return float
     */
    public function calculate(float $valueOne, float $valueTwo): float;
}
