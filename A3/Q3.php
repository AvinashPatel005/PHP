<?php
function odd_even($num) { 
 if ($num % 2 == 0) {
 return "even";
 } else {
 return "odd"; } }
$num = 17; 
$result = odd_even($num);
echo "$num is $result.";
?>
