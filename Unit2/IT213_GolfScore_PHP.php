<?php 
$par = 3;
$strokes = 4;

if ($strokes <= $par) {
    print("score is below par");
}

else if ($strokes > $par) {
    print("score is above par");
}

else if($strokes == $par) {
    print("score is equal to par");
}

?>