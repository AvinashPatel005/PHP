<?php
$file = 'test4.txt';
if (!unlink($file)) {  
    echo ("$file cannot be deleted due to an error");  
}  
else {  
    echo ("$file has been deleted");  
}  
?>