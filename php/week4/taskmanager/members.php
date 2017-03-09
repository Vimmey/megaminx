<?php
session_start();
?>
Your information is 
<?php
echo "<br>Your Name is {$_SESSION['logininfo']}<br>";
echo "<br>Your Password is {$_SESSION['logininfo1']}<br>";