<?php

$famNames = [];
foreach($_POST['memName'] as $val) {
    array_push($famNames, $val);
}

echo "You entered the following family names:<br>";
foreach($famNames as $name) {
    echo $name."<br>";
}
// echo "testing testing 1 2 3";
?>