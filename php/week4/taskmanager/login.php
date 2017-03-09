<?php
$username = $_POST['username'];
$password = $_POST['password'];

include"dbconfig.php";

$conn = new mysqli($DBServer,$DBUser,$DBPass,$DBName);

if($conn->connect_error) {
	trigger_error("Database connection failed". $conn->connect_error, E_USER_ERROR);
}
else
echo "connected.<br>";

$sql="SELECT * FROM user where username ='$username' AND password ='$password'";

// die($sql);

$rs=$conn->query($sql);
$conn->close();
if($rs === false) {
	trigger_error('Wrong Sql'.$sql.'Error'. $conn->error,E_USER_ERROR);

}else {
	$rows_returned = $rs->num_rows;
	if($rows_returned == 1) {
		echo 'you are logged in';
		session_start();
		$_SESSION['username'] = $username;
		$_SESSION['is_loggedin'] = true;
		
		$userOb = $rs->fetch_object();
		$_SESSION['user_id'] = $userOb->id;
	}
	else{
		header("Location:login.html");
	}
}





