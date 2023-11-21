<?php
function changeCase($array, $toLower = true) {
    $result = array();

    foreach ($array as $key => $value) {
        $result[$key] = $toLower ? strtolower($value) : strtoupper($value);
    }

    return $result;
}

$Color = array('A' => 'Blue', 'B' => 'Green', 'c' => 'Red');
$lowerCaseArray = changeCase($Color);
echo "Values are in lower case.<br>";
print_r($lowerCaseArray);
echo "<br>";
$upperCaseArray = changeCase($Color, false);
echo "Values are in upper case.<br>";
print_r($upperCaseArray);

?>
