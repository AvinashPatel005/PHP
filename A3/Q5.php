<?php
function Prime($num) {
 if ($num <= 1) {return false;} 
for ($a = 2; $a * $a <= $num; $a++) {
 if ($num % $a == 0) {
 return false;} }
 return true;
}echo "Prime numbers between 1 and 50 are: ";
for ($a = 2; $a <= 50; $a++) {
 if (Prime($a)) {
 echo $a . " <br> "; } }
?>