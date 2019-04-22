<?php
$numStu = $_POST["numStu"];
echo "<!DOCTYPE><html><body><form method='post' action='Exercise2_pt2.php'>";
for($i = 0; $i < $numStu; $i++){
    echo "Enter student's grades: <input type='number' name='grade[]' id='grade[]'/><br>";
}
echo "<input type='submit'/></form></body></html>";
?>