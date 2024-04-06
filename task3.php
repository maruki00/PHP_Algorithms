<?php

function modularExponentiation($base, $exponent, $modulus) {
    $result = 1;
    $base = $base % $modulus;
    while ($exponent > 0) {
        if ($exponent % 2 == 1)
            $result = ($result * $base) % $modulus;
        $exponent = $exponent >> 1;
        $base = ($base * $base) % $modulus;
    }
    return $result;
}

function lastTenDigitsOfSeriesSum($n) {
    $modulus = pow(10, 10);
    $sum = 0;
    
    for ($i = 1; $i <= $n; $i++) {
        $sum += modularExponentiation($i, $i, $modulus);
        $sum %= $modulus;
    }
    return $sum;
}

$lastTenDigits = lastTenDigitsOfSeriesSum(10);
echo substr($lastTenDigits, -5, 5);