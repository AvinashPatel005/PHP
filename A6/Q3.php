<?php
$file = 'test.txt';
$new = "\nHi everyone!";
file_put_contents($file, $new, FILE_APPEND);
echo file_get_contents($file);
?>