<?php

// $avg = setType($_POST["avg"], "float");
$avg = 0;
$msg = "Point is %s";

while($avg != -1) {
    $avg = echo readline("Enter a grade (-1 to quite): ");
    if ($avg >= 90) {
        str_replace("%s", "4", $msg);
    }
    
    else if ($avg >= 80 && $avg < 89) {
        $msg = str_replace("%s", "3", $msg);
    }
    
    else if ($avg >= 70 && $avg < 79) {
        $msg = str_replace("%s", "2", $msg);
    }
    
    else if ($avg >= 60 && $avg < 69) {
        $msg = str_replace("%s", "1", $msg);
    }
    else if ($avg < 60) {
        $msg = str_replace("%s", "0", $msg);
    }

    // header("Location: http://localhost/213-PHP/Unit7/IT213_Fike_Unit7_CP1_PHP.php");
    // exit();

    // $host  = $_SERVER['HTTP_HOST'];
    // $uri   = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
    // $extra = 'mypage.php';
    // header("Location: http://$host$uri");
    // exit;

    if ($avg == -1){
        echo $msg;
    }
}

?>