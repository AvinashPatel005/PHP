<?php
function Age($a){
    if ($a>=18) {
        echo "You are eligible to cast your vote.";
    }
    else {
        echo "You are not eligible to cast your vote.";
    }
  }
  Age(10);
?>