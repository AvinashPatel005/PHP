<?php
function employee ($id,$hours,$perhour){
    echo "Your employee id is = $id<br>";
    $salary = $hours*$perhour;
    echo "Your Salary Per day according to work hours is = $salary ";
    
  }
  employee(21105,8,300);
?>