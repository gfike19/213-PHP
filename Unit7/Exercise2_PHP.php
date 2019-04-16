<?php
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

?>