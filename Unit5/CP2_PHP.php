<?php

$Number = 1;
$Count = 1;

while ($Count <= 10) {

    if($Number % 2 == 0 ) {
        echo $Number."<br>";
        $Count += 1;
    }
    else{
        $Number += 1;
    }
}

?>