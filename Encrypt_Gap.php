<?php
    $arr = range('A', 'Z');
    $str = "KILL JOHN";
    $gap = 4;
    $result = "";
    
    for($i=0; $i<strlen($str); $i++){
        $result .= $str[$i];
        for($j=0 ;$j<$gap-1; $j++){
            $key = rand(0, 25);
            $result .= $arr[$key];
        
        }
    }
    echo($result);
?>