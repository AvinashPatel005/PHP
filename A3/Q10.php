<?php
$rows = 4; 
$num = 1;
for ($a = 1; $a <= $rows; $a++) {
 for ($b = 1; $b <= $a; $b++) {
 echo $num . " ";
 $num++;
 }
 echo "<br>";
}
?> 