<?php
//Encrypt
    $arr = array('a','b','c','d','e','f','g','h','i','j','k','l','m'
                ,'n','o','p','q','r','s','t','u','v','w','x','y','z');
    $str = "Hello World, I am cs";
    $shift = 3;
    $result = "";
    $str = strtolower($str);
    for($i=0;$i<strlen($str);$i++){
        
        if(in_array($str[$i], $arr)){
            $index = array_search($str[$i], $arr);
            $key = ($index + $shift) % 26;
            $result .= $arr[$key];
            
        }
        else{
            $result .= $str[$i];
            
        }
    }
    echo($result);

?>