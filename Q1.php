<?php
$count = 0;
$fileContents = file_get_contents("test.txt");
$lines = explode("\n", $fileContents);
echo "Total number of lines are: " . count($lines);
?>