<?php
function divide($dividend, $divisor) {
    $result = 0;
    while ($dividend >= $divisor) {
        $dividend -= $divisor;
        $result++;
    }
    return $result;
}

$dividend = 15;
$divisor = 2;  
echo "Result of division: " . divide($dividend, $divisor);
?>
