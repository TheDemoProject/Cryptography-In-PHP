<?php
//Decrypted using shift techni
    $arr = range('a','z');
    $encryp_str = "khoor zruog, l dp fv";
    $shift = 3;
    $result = "";
    for($i=0; $i<strlen($encryp_str); $i++){
        if(in_array($encryp_str[$i], $arr)){
            $index  = array_search($encryp_str[$i], $arr);
            $key = ($index - $shift);
            if($key < 0){
                $key += 26;
                $result .= $arr[$key];
            }
            else{
                $result .= $arr[$key];

            }
        }
        else{
            $result .= $encryp_str[$i];
        }
    }
    echo($result);


?>