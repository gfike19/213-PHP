<?php
function IsEven(){
	for($num = 1; $num <= 20; $num++) {
		if($num % 2 != 0) {
			echo $num." is an Odd integer.<br>";
		}
		else {
			echo $num." is an Even integer.<br>";
		}
	}
}
IsEven();
?>