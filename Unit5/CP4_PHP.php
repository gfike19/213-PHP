<?php
// will look at answer to see where I went wrong
$sentence = "The quick brown fox jumps over the lazy dog.";
$wordCount = 1;
$strlen = strlen( $sentence);
$word = "";
for( $i = 0; $i <= $strlen; $i++ ) {
    
    $char = substr( $sentence, $i, 1 );
    
    if(ctype_space($char) == False){
        $word = $word.$char;
    }
    else {
        echo $wordCount." ".$word."<br>";
        $word = "";
        $wordCount ++;
    }
}

?>