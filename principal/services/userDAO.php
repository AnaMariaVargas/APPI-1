<?php
include "conection.php";

function getAllUsers(){ //para buscar todos los datos
    return $query = mysqli_query(CONNECTION, "SELECT * FROM ususarios");
}

function getUserByIdNumber($idNumber){ //para buscar un dato especifico... 
    return $query = mysqli_query(CONNECTION, "SELECT * FROM ususarios WHERE cedula=$idNumber");
}
function createUser ($user){
    $query = "INSERT INTO usuarios(nombre, apellido, cedula) values (";
    $query .= "'".$user -> nombre."',";
    $query .= "'".$user -> apellido."',";
    $query .= "'".$user -> cedula."',";")";
    return mysqli_query(CONNECTION, $query);
}


//print_r(mysqli_fetch_all($query, MYSQLI_ASSOC));

//SELECT --> GET --> traer datos
//INSERT --> POST --> enviar datos
//UPDATE --> PUT --> actualizar datos
//DELETE-->DELETE-->eliminar datos
?>