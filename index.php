<?php
include 'con.php';
$id = $_GET['id'];
$tk = $_GET['tk'];
$co=$_COOKIE['tg'];
if($id){
if(!$co){
	setcookie('tg',$tk,time()+60*60*24*365);
	$records = mysqli_query($conn,"select * from lifdata where id='$id'"); 
$data   = $records->fetch_assoc();
$type= $data['type'];
if($type == "normal"){
header("Location: lifafa/index.php?id=$id");
}else if($type == "toss"){
	header("Location: lifafa/toss.php?id=$id");
}else if($type == "dice"){
	header("Location: lifafa/dice.php?id=$id");
}
}else{
	$records = mysqli_query($conn,"select * from lifdata where id='$id'"); 
$data   = $records->fetch_assoc();
$type= $data['type'];
if($type == "normal"){
header("Location: lifafa/index.php?id=$id");
}else if($type == "toss"){
	header("Location: lifafa/toss.php?id=$id");
}else if($type == "dice"){
	header("Location: lifafa/dice.php?id=$id");
}
}
}else{ 
	header("Location: dashboard.php");
}
?>