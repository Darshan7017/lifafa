<?php
include 'con.php';
$user=$_COOKIE["user"];
$error="";
$records1 = mysqli_query($conn,"select * from user where mail='$user'"); 
$data1   = $records1->fetch_assoc();
$bid= $data1['botalert'];
$bal = $data1['bal'];
echo "₹".$bal;
?>