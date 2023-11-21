<?php
$rows = 5; 
for ($a = 1; $a <= $rows; $a++) {
 
 for ($b = 1; $b <= $a; $b++) {
 echo $b;
 }
for ($c = $rows - $a; $c >= 1; $c--) { 
 echo " ";
 }
echo "<br>";
 }
?>