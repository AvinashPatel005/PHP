<?php
$old = "test2.txt";
$new = "test3.txt";

if (file_exists($old)) {
    rename($old, $new);
    echo "File renamed successfully.";
} else {
    echo "File does not exist.";
}
?>