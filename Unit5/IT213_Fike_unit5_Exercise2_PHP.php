<?php
$avg = 0;
$sum = 0;
for($i = 0; $i < 50; $i++){
    $sum += $i;
}

$avg = $sum / 50;
echo "Average is: ".$avg;
?>