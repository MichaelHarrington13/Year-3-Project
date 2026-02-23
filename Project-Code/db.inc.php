<?php

$host = "localhost";
$user = "u253435553_C00296932";
$password = "Yt6PSsrm8";
$database = "u253435553_DrugAddiction";

$conn = mysqli_connect($host, $user, $password, $database);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

?>
