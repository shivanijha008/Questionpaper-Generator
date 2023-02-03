<?php

$QuestionId=$_POST["QuestionId"];
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

// sql to delete a record
$sql = "DELETE FROM addque WHERE  QuestionId='$QuestionId' AND Semester='$Semester' AND Subject='$Subject' AND Branch='$Branch'";

if ($conn->query($sql) === TRUE) {
  echo "Record deleted successfully" .$sql;
} else {
  echo "Error deleting record: " . $conn->error;
}

$conn->close();
?>