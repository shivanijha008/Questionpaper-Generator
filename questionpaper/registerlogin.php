<?php
  $Username=$_POST["Uname"];
  $Password=$_POST["Pass"]; 
   $ConfirmPassword=$_POST["CPass"];
  $Designation=$_POST["Admin"];
  
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
$sql = "INSERT INTO register(Username , Password , ConfirmPassword , Designation ) VALUES('$Username','$Password','$ConfirmPassword','$Designation')" ;
if($conn->query($sql)===TRUE)
{
echo "New record inserted  successfully";
}
else
{
  echo "Error: " .$sql . "<br>" .  $conn->error;
}
$conn->close();
?>