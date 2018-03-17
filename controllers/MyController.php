<?php
namespace Controllers;

use Models\Calculation;

class MyController
{
    public function run()
    {
        $calculation = new Calculation;
        $result = $calculation->sum(1, 2);
        echo "sum 1 + 2 = $result \n";
    }
}
