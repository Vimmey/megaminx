<?php
session_start();

if(isset($_SESSION['is_loggedin']) && $_SESSION['is_loggedin'] == true) {
	$userID = $_SESSION['user_id'];

	echo 'you are logged in and your username is '.$_SESSION['username'];
	include"dbconfig.php";

	$conn = new mysqli($DBServer,$DBUser,$DBPass,$DBName);

	if($conn->connect_error) {
		trigger_error("Database connection failed". $conn->connect_error, E_USER_ERROR);
	}
	else
	echo "connected.<br>";

	$sql="SELECT * FROM tasks as t INNER JOIN tasks_assigned as ta ON t.id = ta.task_id where user_id = '$userID'";

	// die($sql);

	$rs=$conn->query($sql);
	$conn->close();
	if($rs === false) {
		trigger_error('Wrong Sql'.$sql.'Error'. $conn->error,E_USER_ERROR);

	}else {
		while($row=$rs->fetch_object()){
			echo'<pre>';
			print_r($row);
			echo '<br>';
			echo'</pre>';
		}
	}
	echo'<a href = "logout.php">Logout</a>';

}
else{
		header("Location:login.html");
}


