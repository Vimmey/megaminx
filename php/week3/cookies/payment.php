<?php
session_start();
?>
Please Pay Below
<?php
echo "Your Item is {$_SESSION['itemtobuy']}";