<?php

function SumThree($num1, $num2, $num3) {
	return ($num1 + $num2 + $num3);
}

function Avg($num1, $num2, $num3) {
    $avg = ($num1 + $num2 + $num3) / 3;
    return $avg;
}

$num1 = $_POST['num1'];
$num2 = $_POST['num2'];
$num3 = $_POST['num3'];
echo "You entered: ".$num1.", ".$num2.", ".$num3."<br>";
echo "Average is: ".Avg($num1, $num2, $num3."<br>");
echo "Sum is: ".SumThree($num1, $num2, $num3);
?>