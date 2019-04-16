<?php
function celsius($temp) {
    $cTemp = 5.0/9.0 * ($temp - 32);
    return $cTemp;
}

function farenheit($temp) {
    $fTemp = 9.0/5.0 * $temp + 32;
    return $fTemp;
}

$temp = $_POST['temp'];

echo $temp." is ".celsius($temp)." degrees Celsius<br>";
echo $temp." is ".farenheit($temp)." degrees Farenheit";
?>