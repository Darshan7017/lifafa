<?php
$email = $_COOKIE['user'];
session_start();
setcookie('user',$email,time()-3600);
header("Location: login.php");

?>