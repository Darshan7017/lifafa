<?php 
include '../con.php';
$user=$_COOKIE["admin"];
$error="";

if(!$user){
$error ='
          <div style="width: 20rem; margin: auto; padding: 1.1rem;"><div class="alert alert-danger alert-dismissible" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                    Please Login Again To Continue 
                  </div></div>
                  ';
   echo"<meta http-equiv='refresh' content='1;url=login.php'>";
   }
$ip = $_SERVER['REMOTE_ADDR'];
$result = $_POST['result'];
$num = $_POST['num'];
if($result){
if($result == "auto"){
echo "Result Setted To ".$result." And Ip Is ".$ip;
$insert="UPDATE `admin` SET `result`='$result' WHERE `id`=1";
    $ins=mysqli_query($conn,$insert);
   }else if($result == "manual"){
   	echo "Result Setted To ".$result." And Ip Is ".$ip;
$insert="UPDATE `admin` SET `result`='$result' WHERE `id`=1";
$ins=mysqli_query($conn,$insert);
 }
 }
 if($num){
 	echo "Number Setted To ".$num." And Ip Is ".$ip;
$insert="UPDATE `admin` SET `num`='$num' WHERE `id`=1";
    $ins=mysqli_query($conn,$insert);
}
 ?>