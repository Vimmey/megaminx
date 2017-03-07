<?php

$userid = $_POST['userid'];
$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];
$phone = $_POST['phone'];


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
echo "connected";


$sql_insert  = "INSERT INTO first(userid,name,password,emalId,phone) VALUES ($userid,$name,$password,$email,$phone)";
$rs =$conn->query($sql_insert);
if($rs === true) {
	 echo "New record created successfully";
}else{
	trigger_error("Database insertion failed". $conn->connect_error, E_USER_ERROR);
}

