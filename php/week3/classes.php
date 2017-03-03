<?php
class User{
	public $username;
	private $password;
	protected $fullName;

	// function __construct($username,$password,$fullName) {
	// 	echo "Constructor<br>";
	// 	$this->username = $username;
	// 	$this->password = $password;
	// 	$this->fullName = $fullName;
	// }

	// function __destruct() {
	// 	echo "destruct<br>";
	// }

	// public function showDetails() {
	// 	echo "The username is $this->username <br>";
	// 	$this->showPassword();
	// }

	// private function showPassword() {
	// 	echo "The password is $this->password <br>";

	// }

	$userOb = new User('vmy','vmy','vmy chopra');
	$userOb->showDetails();
}