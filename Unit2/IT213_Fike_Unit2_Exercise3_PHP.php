<?php
$grade = (int)$_POST['grade'];
if ($grade >= 60) {
	echo "Passed";
}
else {
	echo "Failed";
}
?>