<?php
<<<<<<< HEAD
function Avg($num1, $num2, $num3) {
    $avg = ($num1 + $num2 + $num3) / 3;
    return $avg;
}

$num1 = $_POST['num1'];
$num2 = $_POST['num2'];
$num3 = $_POST['num3'];

echo "You entered: ".$num1.", ".$num2.", ".$num3."<br>";
echo "Average is: ".Avg($num1, $num2, $num3);
=======
function SumThree($num1, $num2, $num3) {
	return ($num1 + $num2 + $num3);
}

function Avg($num1, $num2, $num3) {
    $total = SumThree($num1, $num2, $num3);
    return $total;
}
$num1 = $_POST['num1'];
$num2 = $_POST['num2'];
$num3 = $_POST['num3'];
echo "If input is ".$num1.", ".$num2.", ".$num3."<br>";
echo "Average: ".Avg($num2, $num2, $num3);

>>>>>>> 66b17fbaaee2565515c88e351dfe7a57fa65e544
?>