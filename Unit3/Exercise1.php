<?php 

$grade = (int)$_POST['grade'];
$gradecounter = 0;
$total = 0;
while ($gradecounter < 2) {
    $total += $grade;
    $gradecounter ++;
    // header("Location: IT213_Fike_Unit3_Exercise1_PHP.html");
    echo "<h1>Grade is: ".(string)$grade."</h1>";
    
}

if ($gradecounter > 2) {
    $avg = $total / 3;
    $otherAvg = $total / 10; //mimic JS from around line 40
    // header("Location: IT213_Fike_Unit3_Exercise1_PHP.html");
    echo "<h1> Actual Average Is: ".(string)$avg."</h1>";
    echo "<h1> Other Average Is: ".(string)$otherAvg."</h1>";
}


?>