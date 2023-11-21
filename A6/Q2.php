<?php
$find = "l3";
$fileContents = file_get_contents("test.txt");
$lines = explode("\n", $fileContents);
$lineNumber = 0;

foreach ($lines as $line) {
    $lineNumber++;
    if (strpos($line, $find) !== false) {
        echo "Word '$find' found on line $lineNumber<br>";
    }
}
?>