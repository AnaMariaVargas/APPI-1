<?php
const CONNECTION = new mysqli("localhost", "root", "", "appi-1");


$query = mysqli_query(CONNECTION, "SELECT * FROM ususarios");

print_r(mysqli_fetch_all($query, MYSQLI_ASSOC));
?>