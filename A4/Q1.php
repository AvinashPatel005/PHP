<?php
function isPalindrome($str) {
    $str = strtolower(str_replace(' ', '', $str));
    return $str === strrev($str);
}

$string = "level";
if (isPalindrome($string)) {
    echo "Palindrome";
} else {
    echo "Not a palindrome";
}
?>
