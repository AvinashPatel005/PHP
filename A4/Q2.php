<?php
function table($num,$a){
if ($a<=12){
    $product = $num * $a;
    echo "$num X $a = $product<br>";
    table ($num,$a+1);
   }
}
table(73,1);
?>
