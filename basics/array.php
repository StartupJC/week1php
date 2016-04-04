<?php
$temp = 0;
$i= 0;
foreach (array(1, 2, 5, 10, 255,3) as &$value) {
    $temp = $temp + $value;
    $i++;
    $avg=$temp/$i;
}    
echo "$avg <br>";

?>