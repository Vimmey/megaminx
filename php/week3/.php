<?php
$selectedCity = '';
if(isset($_COOKIE['city'])) {
	$selectedCity = $_COOKIE["city"];
} 
if(!$selectedCity) {
	echo "City not found";
} else{
	echo "city is $selectedCity";
}
