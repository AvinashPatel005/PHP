<?php
function days($d){
    $year =(int) ($d/365);
    $month = (int)($d%365/30);
    $days = (int)($d%365)%30;
    
      echo "year = $year<br>";
      echo "months = $month<br>";
      echo "days remaining = $days <br>";
    }
    days(800);
?>