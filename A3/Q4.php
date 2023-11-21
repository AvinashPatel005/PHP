<?php 
$a=12345;
$sum=0;
while($a>0){
$rem=$a%10;
$sum=$sum+$rem;
$a/=10;
}
echo "$sum";
?>
