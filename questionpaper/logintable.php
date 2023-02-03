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
$sql="CREATE TABLE qpt(
    
  Username varchar(30)  NOT NULL,
  Password varchar (30) NOT NULL
    
    )";

if($conn->query($sql)===TRUE)
{
    echo "create the table successfully";
}
else{
    echo "erreor creating table:" .$conn->error;
}
$conn->close();
?>