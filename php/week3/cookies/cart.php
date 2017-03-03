<?php
$shop = $_POST['shop'];
echo $shop;
session_start();
$_SESSION['itemtobuy'] = $shop;