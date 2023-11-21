<?php
function write($text) {
    $file = fopen("test1.txt", "w");
    fwrite($file, $text);
    fclose($file);
}

write("This will replace all Texts.");
echo file_get_contents("test1.txt");
?>