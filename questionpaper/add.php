<?php
  $QuestionId=$_POST["QuestionId"];
  $YourQuestion=$_POST["YourQuestion"]; 
  $Difficulty=$_POST["Difficulty"];
  $Module=$_POST["Module"];
  $Semester=$_POST["Semester"];
  $Subject=$_POST["Subject"];
  $Branch=$_POST["Branch"];
  $Marks= $_POST["Marks"];

  $servername = "localhost";
$username = "root";
$password = "";
$dbname = "qp";
//create connection
$conn = new mysqli($servername, $username, $password, $dbname);
//check connection
if ($conn->connect_error)
{ 
    die("connection failed:" .$conn->connect_error);
}
$sql = "INSERT INTO addque(QuestionId , YourQuestion , Difficulty , Module , Semester , Subject , Branch , Marks) VALUES('$QuestionId','$YourQuestion' , '$Difficulty' , '$Module' , '$Semester' , '$Subject' , '$Branch' , '$Marks')" ;
if($conn->query($sql)===TRUE)
{
echo "New record inserted  successfully" ;
}
else
{
  echo "Error: " .$sql . "<br>" .  $conn->error;
}
$conn->close();
?>