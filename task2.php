<?php


function fibonacciIndex(int $num): int
{
    $previousNumber = 1;
    $ouldNumber = 0;
    $index = 0;
    $currentNumber = 0;
    $limit = pow(10, $num-1);
    while($currentNumber < $limit){
        $currentNumber = $previousNumber + $ouldNumber;
        $ouldNumber = $previousNumber;
        $previousNumber = $currentNumber;
        ++$index;
    }
    return ++$index;
}
echo fibonacciIndex(3);

