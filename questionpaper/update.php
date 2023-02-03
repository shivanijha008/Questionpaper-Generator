<?php

$QuestionId=$_POST["QuestionId"];
$YourQuestion=$_POST["YourQuestion"];
$Semester=$_POST["Semester"];
$Subject=$_POST["Subject"];
$Branch=$_POST["Branch"];
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "qp";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "UPDATE addque SET YourQuestion='$YourQuestion' WHERE QuestionId='$QuestionId' AND Semester='$Semester'  AND Subject= '$Subject' AND Branch='$Branch'";

if ($conn->query($sql) === TRUE) {
  echo "Record updated successfully";
} else {
  echo "Error updating record: " . $conn->error;
}

$conn->close();
?>