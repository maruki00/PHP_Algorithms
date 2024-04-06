<?php
const MAX = 10000;
function sumDivisors($num){
    if ($num <= 1) {
        return 0;
    }
    $result = 1;
    $sqrt = sqrt($num);
    for ($i = 2; $i < $sqrt; $i++) {
        if ($num % $i == 0) {
            $result += $i + $num / $i;
        }
    }
    if (floor($sqrt) == $sqrt) {
        $result += $sqrt;
    }
    return $result;
}
$numbers = [];
for($i=2; $i<=MAX; $i++){
    for($j=1; $j<=MAX-1; $j++){   
        $result1 = sumDivisors($i);
        $result2 = sumDivisors($j);
        if($i === $result2 && $j === $result1 && $i!== $j){
            $numbers[]= [$i ,$j];
        }
    }
}

print_r($numbers);
?>