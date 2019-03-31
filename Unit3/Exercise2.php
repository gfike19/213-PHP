<?php 

$sum = 0;

for($i = 1; $i < 100; $i++) {
    $sum += $i;
}

$avg = $sum / 100;

echo "The sum is: ".$sum."<br>";
echo "The average is: ".$avg;

?>