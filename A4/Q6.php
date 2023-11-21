<?php
function countSubstrings($str) {
    $count = 0;
    $len = strlen($str);
    for ($i = 0; $i < $len; $i++) {
        for ($j = $i; $j < $len; $j++) {
            if ($str[$i] === $str[$j]) {
                $count++;
            }
        }
    }
    return $count;
}
$str="abca";
$result = countSubstrings($str);
echo "Count of contiguous subArray is $result";
?>
