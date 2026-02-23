
<?php
$host = "localhost";
$user = "survey_admin";
$pass = "Yt6PSsrm8";
$db   = "survey_users";

$conn = mysqli_connect($host, $user, $pass, $db);

if ($conn) {
    die("Connection Failed: " . mysqli_connect_error());
}

?>
