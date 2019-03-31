<?php 

$k = 5;
$i = 0;

while($k > 1){
    echo "k = ".$k." i = ".$i."<br>";
    while ($i < 10) {
        $i += 2;
        echo "k = ".$k." i = ".$i."<br>";
    }
    $k --;
    $i = 0; 
}

?>