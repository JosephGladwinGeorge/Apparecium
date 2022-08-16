<?php

$servername = "localhost";
$username = "id18407310_periodtrack";
$password = ")rY%!D3E~D^PC3q7";
$database = "id18407310_schedule";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
?>  