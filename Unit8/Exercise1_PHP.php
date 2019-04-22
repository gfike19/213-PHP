<?php


$arr = (array)null;

for($i = 0; $i < 10; $i++) {
    $rNum =rand(-100, 100);
    $arr[$i] = $rNum;
}

for($i = 0; $i < sizeof($arr); $i++){
    echo "Arry at ".$i." is ".$arr[$i]."<br>";
}
?>