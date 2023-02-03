<?php
$QuestionId=$_POST[ "QuestionId"];
  $Semester=$_POST[ "Semester"]; 
  $Subject=$_POST[ "Subject"];
  $Branch=$_POST[ "Branch"];
 
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
$sql = "SELECT * FROM addque WHERE QuestionId='$QuestionId' AND Semester ='$Semester' AND Subject='$Subject' AND  Branch='$Branch'";
$result = $conn->query($sql);
if($result)
{
if($result->num_rows > 0)
{
  echo "<table>";
while($row = $result ->fetch_assoc())
{
echo  "<tr><td> QuestionId: " . $row["QuestionId"]. " Semester: "  . $row["Semester"]. "<br> Subject:" . $row["Subject"].  "<br>Branch: " . $row["Branch"]. "</td></tr>";
}
echo "</table>";
}
else 
{
  echo "0 results" .$sql;
}
}
$conn->close();
?>