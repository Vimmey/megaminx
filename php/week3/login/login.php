<?php
$username = $_POST['username'];
$password = $_POST['password'];

if($username == 'vmy' && $password == 'vmy') {
	session_start();	
	$_SESSION['username'] = $username;
	$_SESSION['is_loggedin'] = true;
	echo "You are logged in";

}else{
	echo "Sorry.Invalid";
}
