<?php

$sentence = "The quick brown fox jumps over the lazy dog.";
// the psuedo code doesn't mention this but I don't see how you can do it otherwise
$wordCount = 1;
foreach($sentence as $chr) {
    // again, psuedo code doesn't make mention of this but unsure of how to print words otherwise
    $word = ""
    if($chr != " " ){
        $word += $chr;
    }
    else {
        echo $wordCount + " " + $word + "<br>";
        $word = "";
        $wordCount ++;
    }
}

?>