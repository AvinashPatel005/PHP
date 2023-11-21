<?php
$array1 = array(array(77, 87), array(23, 45));
$array2 = array("w3resource", "com");

$mergedArray = array();
foreach ($array1 as $key => $value) {
    $mergedArray[] = array_merge($value, array($array2[$key]));
}
print_r($mergedArray);
?>
