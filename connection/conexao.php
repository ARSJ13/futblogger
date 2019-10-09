<?php

$servername = "localhost";
$database = "u144972883_turma";
$username = "u144972883_fut";
$password = "123456";

$conn = mysqli_connect($servername, $username, $password, $database);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";

?>