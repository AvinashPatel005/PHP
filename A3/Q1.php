<?php
function simple_interest($p, $r, $t) {
 $simple_interest= ($p * $r * $t) / 100;
 return $simple_interest;
}
$ans = simple_interest(10000,3,4); 
echo "$ans";
?>