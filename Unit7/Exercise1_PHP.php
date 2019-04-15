<?php

function userMax($num1, $num2, $num3) {
    $largest = 0;

    if ($num1 > $largest) {
        $largest = $num1;
    }

    if ($num2 > $largest) {
        $largest = $num2;
    }

    if($num3 > $largest) {
        $largest = $num3;
    }

    return $largest;
}
$num1 = $_POST['num1'];
$num2 = $_POST['num2'];
$num3 = $_POST['num3'];

echo "You entered: ".$num1.", ".$num2.", ".$num3."<br>";
echo "The maxium number is: ".userMax($num1, $num2, $num3);

?>