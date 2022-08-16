<?php

include "connection.php";
$pdate = date('Y-m-d',strtotime("$stringdate -3 day"));
$sql = "INSERT INTO scheduler (name, email, date)
VALUES ('$name', '$email', '$pdate')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>