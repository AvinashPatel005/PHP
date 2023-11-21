<?php
function concatinate($name ,$surname)
{
  $fullname = $name .$surname;
  return $fullname;
  }
$strings = concatinate("Avinash", "Patel");
echo $strings;
echo "<br>";
?>