<?php

require_once '../vendor/autoload.php';

use Controllers\Calculation;

$calc = new Calculation;
$result = $calc->sum(1, 2);
echo "Soma 1 + 2 = $result<br>";

$calc = new Calculation;
$result = $calc->sub(2, 1);
echo "Subtração de 2 - 1 = $result <br>";

$calc = new Calculation;
$result = $calc->multi(2, 2);
echo "\nMultiplicação de 2 x 2 = $result\n";
