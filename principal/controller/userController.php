<?php
include "./services/userDAO.php";
include "./model/User.php";


function createUserDAO($name, $lastName, $idNumber){
    $user = new User (
        null,
        $name,
        $lastName,
        $idNumber
    );
    return createUser($user);
}


function getUsers(){
    $usersQuery = getAllUsers();
    $users = array();

    while($row = mysqli_fetch_assoc($usersQuery)){
        $user = new User(
            $row["id"],
            $row["nombre"],
            $row["apellido"],
            $row["cedula"],
        );
        $userList[] =$user;
    }
    return $userList;
}

?>