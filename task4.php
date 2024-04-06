<?php
function Solution(int $num):mixed
{
    // This can solve very long numbers problem
    $result = number_format(pow(2, $num));
    $result = str_replace(',', '', $result);
    return array_sum(str_split($result, 1));
}
echo Solution(1000);