<?php
$arr = [25, 5, 48, 34, 1, 15];
$total = 0;
foreach($arr as &$val) {
    $total += $val;
}
$avg = $total/sizeof($arr);
echo "Average is: ".$avg;
?>