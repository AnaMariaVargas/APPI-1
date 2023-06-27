<?php
include "./controller/passUtils.php";


$passMessage = "";
$color = "";
$register  = false ;

if (isset($_POST["user_name"]) && isset($_POST["user_pass"])){
    $userName = $_POST["user_name"];
    $userPass = $_POST["user_pass"];

    if (hasSecurityLong($userPass)){
        if (hasUpperLetter($userPass)){
            if (hasNumber($userPass)){

                $color = "green";
                $passMessage = "Felicidades, su clave es segura";  
                $register  = true ;
            }

            }else{
                $color = "red";
                $passMessage = "su contraseña debe tener al menos un numero";  
            }

        }else{
            $color = "red";
            $passMessage = "su contraseña debe tener al menos una mayuscula";  
        }

    }else{
        $color = "red";
        $passMessage = "su contraseña debe tener al menos 8 caracteres";
    }




?>