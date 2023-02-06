<?php

require_once 'App/init.php';

$first = new FirstRuleCalculator();
$second = new SecondRuleCalculator($first);
$third = new ThirdRuleCalculator($second);
$fourth = new FourthRuleCalculator($third);
$calculator = new PPH21Calculate($first, $second, $third, $fourth);

echo $calculator->calculate(25000000);
echo PHP_EOL;

