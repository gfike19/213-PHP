<?php

function SumThree($num1, $num2, $num3) {
	return ($num1 + $num2 + $num3);
}

function Avg($num1, $num2, $num3) {
	return SumThree($num1, $num2, $num3)/3;
}

echo "If input is ".$num1.", ".$num2.", ".$num3."<br>";
echo "Average: ".Avg($num2, $num2, $num3);

?>