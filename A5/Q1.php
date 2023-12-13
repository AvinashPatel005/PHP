<?php
$colors = array('white', 'green', 'red');
echo "<ul>";
for ($i=0,$j=1; $i < count($colors) ; $i++,$j=($j+1)%count($colors)) { 
    echo "<li>".$colors[$j]."</li><br>";
}
echo "</ul>";
?>
