<?php
$name = $_POST['name'];
$password = $_POST['password'];
session_start();
$_SESSION['logininfo'] = $name;
$_SESSION['logininfo1'] = $password;
$DBServer ='localhost';
$DBUser ='root';
$DBPass ='vimmey';
$DBName ='zenrays1';
$output = '';
$conn = new mysqli($DBServer,$DBUser,$DBPass,$DBName);

if($conn->connect_error) {
	trigger_error("Database connection failed". $conn->connect_error, E_USER_ERROR);
}
else
echo "connected.<br>";


$sql_insert="INSERT INTO forms1(username,password) VALUES('$name','$password')";
$rs =$conn->query($sql_insert);
if($rs === true) {
	 echo "New record created successfully";
}else{
	trigger_error("Database insertion failed". $conn->connect_error, E_USER_ERROR);
}



$conn->close();




