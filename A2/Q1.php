<?php
 // a. Using third variable
 $n1 = 5;
 $n2 = 10;
 echo "Original Numbers: a = $n1, b = $n2";
 $temp = $n1;
 $n1 = $n2;
 $n2 = $temp;
 echo "<br>After Swapping : a=$n1, b=$n2<br>";
 // b. Without no third variable
 $n1 = 15;
 $n2 = 20;
 echo "Original Numbers: a = $n1, b = $n2";
 $n1 = $n1 + $n2;
 $n2 = $n1 - $n2;
 $n1 = $n1 - $n2;
 echo "<br>After Swapping : a=$n1, b=$n2<br>";
 // c. Using arithmetic operators
 $n1 = 25;
 $n2 = 30;
 echo "Original Numbers: a = $n1, b = $n2";
 $n1 = $n1 * $n2;
 $n2 = $n1 / $n2;
 $n1 = $n1 / $n2;
 echo "<br>After Swapping : a=$n1, b=$n2<br>";
?>