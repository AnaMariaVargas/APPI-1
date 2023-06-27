<?php
function hasSecurityLong($pass){
    return strlen($pass) >= 8; //se puede tanbien con un if
   
}

function hasUpperLetter($pass){
    $arrayPass = str_split($pass);
    foreach($arrayPass as $letter){
        if ($letter == strtoupper($letter)){
            return true;
        }
    }
    return false;
}

function hasNumber($pass){
    $arrayPass = str_split($pass);
    foreach($arrayPass as $letter){
        if (is_numeric($letter)){
            return true;
        }
    }
    return false;
}



?>