<?php
$city = $_POST['city'];
echo $city;
$currentTimeStamp = time();  //will tell the current time so that we can delete cookies after specified time in next line
$returnVal = setcookie("city",$city, $currentTimeStamp+10); // will delete the cookie after 30 sec... if we set negative value.. ex timestamp-10.. actually any negative value means to delete cookies instantly bcz that negative time has already happpend in the past
if($returnVal){
echo " Cookies is set";
} else {
	echo " Cookie failed";
}

// header("location:cookiesForm.php");
?>

