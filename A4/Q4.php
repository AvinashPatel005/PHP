<?php
function fibonacciSum($N) {
    $a = 0;
    $b = 1;
    $sum = 0;

    for ($i = 1; $i <= $N; $i++) {
        $sum += $a;
        $c = $a + $b;
        $a = $b;
        $b = $c ;
    }

    return $sum;
}
$n=5;
$result=fibonacciSum($n);
echo "Sum of $n term in Fibonacci Series: ".$result;
?>
