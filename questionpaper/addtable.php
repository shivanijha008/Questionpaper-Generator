<?php
$servername="localhost";
$username="root";
$password="";
$dbname="qp";

//create connection
$conn=new mysqli($servername,$username,$password,$dbname);

// check connection
if($conn->connect_error)
{
    die("connection failed:" .$conn->connect_error);
}

//sql to create table
$sql="CREATE TABLE addque(
    
  QuestionId varchar(30)  NOT NULL,
  YourQuestion varchar (500) NOT NULL,
  Difficulty varchar(30),
  Module int(6),
  Semester int(6),
  Subject varchar(30),
  Branch varchar(30),
   Marks int(20)

    
    )";

if($conn->query($sql)===TRUE)
{
    echo " table created successfully";
}
else{
    echo "erreor creating table:" .$conn->error;
}
$conn->close();
?>