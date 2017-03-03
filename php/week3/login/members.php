<?php
session_start();
if(isset($_SESSION['is_loggedin']) && $_SESSION['is_loggedin'] == true) 
{
	echo 'you are logged in and your username is '.$_SESSION['username'];
	echo '<a href = "logout.php">Logout</a>';
} 
else {
	header("Location:login.html");
}