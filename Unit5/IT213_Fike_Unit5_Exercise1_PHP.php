<?php
$grade = (int)$_POST['grade'];
if ($grade >= 60) {
	echo "Pass";
}
else {
	echo "FAIL";
}
?>