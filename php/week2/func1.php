<?php
function hello(){
	echo"So hot today";
}

function hi() {
	echo "hello vimmey";
}

$hi = true;

if($hi != true) {
	$functionVariable = "hi"; // $functionVariable = 'hi';
} else {
	$functionVariable = 'hello'; // $functionVariable = "hello";
}

$functionVariable();


?>