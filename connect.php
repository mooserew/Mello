<?php

$host = "localhost";
$username = "root";
$password = "1234";
$database = "SwimDB";

$conn = new mysqli($host, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$conn->set_charset("utf8");

function sanitize_input($input) {
    global $conn;
    return mysqli_real_escape_string($conn, $input);
}

?>
