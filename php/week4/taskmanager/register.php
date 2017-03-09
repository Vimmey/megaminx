<?php
include"dbconfig.php";

$username = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];


$conn = new mysqli($DBServer,$DBUser,$DBPass,$DBName);

if($conn->connect_error) {
	trigger_error("Database connection failed". $conn->connect_error, E_USER_ERROR);
}
else
echo "connected";

$sql_insert="INSERT INTO user(username,password,emailid,) VALUES ($username,$password,$email)";
// die($sql_insert);
echo"hello1";
$rs=$conn->query($sql_insert);
echo"hello2";

if($rs === false) {
	trigger_error("Database insertion failed". $conn->connect_error, E_USER_ERROR);

}else{

echo"hello4";

}
echo "userid of inserted user is $conn->insert_id;";
$conn->close();
