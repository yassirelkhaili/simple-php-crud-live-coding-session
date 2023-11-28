<?php
$host = "localhost:3301";
$username = "root";
$password = "";
$db = "deb";

$mysqli = new mysqli($host, $username, $password, $db);
if ($mysqli->connect_error) {
    printf("an error has occurred", $mysqli->connect_error);
}
?>