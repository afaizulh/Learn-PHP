<?php
namespace App\Calculate;

final class PPH21Calculate
{
    private $calculators;
    public function __construct(CalculatorInterface ...$calculator)
    {
        $this->calculators = $calculator;
    }

    public function calculate(float $pkp): float
    {
        foreach ($this->calculators as $calculator) {
            if ($pkp < $calculator->maxPkp() && $pkp >= $calculator->minPkp()) {
                return $calculator->calculate($pkp);
            }
        }
    }
}
