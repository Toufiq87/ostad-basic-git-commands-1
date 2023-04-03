<?php
 
/**
 * Determins if the argument is even or odd
 */


 /*
 function isEven($n) { 
    if($n % 2==0) {
        return true;
        }
    return false;
}

function factorial($n){
    $result = 1;
for($i=$n;$i<1;$i--){
    $result *= $i;
}
return $result;
}


$stack = array("orange", "banana", "apple", "raspberry");
$fruit = array_pop($stack);
print_r($stack);
*/

$queue = [
    "orange",
    "banana"
];

array_unshift($queue, "apple", "raspberry");
var_dump($queue);
array_slice(
    array $array,
    int $offset,
    ?int $length = null,
    bool $preserve_keys = false
): array