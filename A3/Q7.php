<?php 
function reverse($String) {
 $output = strrev($String);
 return $output;
}
$originalString = "I Love PHP"; 
$reversedString = reverse($originalString);
echo $reversedString;
?>