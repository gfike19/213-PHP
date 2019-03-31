<?php 

$sum = 0;
$i = 1;
while($i < 100) {
    $sum += $i;
    $i ++;
}

$avg = $sum / 100;

echo "The sum is: ".$sum."<br>";
echo "The average is: ".$avg;

?>