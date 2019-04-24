<?php

function celsius($temp) {
    $cTemp = 5.0/9.0 * ($temp - 32);
    return $cTemp;
}

function farenheit($temp) {
    $fTemp = 9.0/5.0 * $temp + 32;
    return $fTemp;
}
$temps = [10,15,20,25,30,32,40,45,50,55,60,65,70];
for($i = 0; $i < sizeof($temps); $i++) 
    {
        $cResult = celsius($i);
        $fResult = farenheit($i);
        $cTemp = settype($cResult, "float");
        $fTemp = settype($fResult, "float");
        echo $i. " degrees Fahrenheit is ".$cTemp." degrees Celsius<br>";
        echo $i." degrees Celsius is ".$fTemp." degrees Fahrenheit<br><br>";
    }
?>