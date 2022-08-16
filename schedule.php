<?php

include "connection.php";

$sql = "SELECT * FROM  scheduler WHERE date = CURDATE() ";
$result = $conn->query($sql);

if ($result->num_rows> 0) {
  while($row = $result->fetch_assoc()) {
    
    $to = $row["email"];
    $subject = "PERIOD ALERT!";
    $txt ="Dear ". $row["name"] .",\r\n". "Looks like you are gona have your periods soon.\nTake care and dont forget to log your period date." ;
    $headers = "From: periodtracker.apparecium@gmail.com";
    if($row["email"]!=NULL){
        mail($to,$subject,$txt,$headers);
    }
  }
} else {
  echo "0 results";
}
$conn->close();
?>