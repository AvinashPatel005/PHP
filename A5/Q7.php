<?php
$array = array("abcde", "abc", "de", "kln", "o", "xyz");

$shortestLength = min(array_map('strlen', $array));
$longestLength = max(array_map('strlen', $array));
echo "The shortest string length is $shortestLength. <br>";
echo "The longest string length is $longestLength.";

?>
