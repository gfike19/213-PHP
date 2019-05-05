<?php
$grades = [];
$total = 0;
foreach($_POST['grade'] as $item)
{
    array_push($grades, $item);
  echo $item."<br>";
  $total += $item;
}
$avg = $total/sizeof($grades);
echo "Average is: ".$avg;
?>