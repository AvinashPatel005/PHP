<?php
$sampleArray = array(
    10 => 'Apple',
    5 => 'Banana',
    8 => 'Orange',
    15 => 'Grapes'
);
$maxKey=0;
foreach($sampleArray as $key=>$value){
    if($maxKey<$key){
        $maxKey = $key;
    }
}
echo "The largest key in the array is: $maxKey";
?>
