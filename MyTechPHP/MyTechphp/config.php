<?php

$server = "localhost";
$user = "root";
$pass = "";
$database = "mytech";

$conn = mysqli_connect($server, $user, $pass, $database);

if (!$conn) {
    die("<script>alert('Lidhja Deshtoi!')</script>");
}

?>