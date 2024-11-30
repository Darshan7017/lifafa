<?php
include 'con.php';
$user=$_COOKIE["user"];
$records1 = mysqli_query($conn,"select * from user where mail='$user'"); 
$data1   = $records1->fetch_assoc();
$bid= $data1['botalert'];
$bal = $data1['bal'];
if(!$user){
$error ='
          <div style="width: 20rem; margin: auto; padding: 1.1rem;"><div class="alert alert-danger alert-dismissible" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                    Please Login To Continue 
                  </div></div>
                  ';
   echo"<meta http-equiv='refresh' content='1;url=login.php'>";
   }
$amo = $_POST['amo'];
$gameid = $_POST['gameid'];
$button  = $_POST['button'];
$realamo = $bal-$amo;
$ip = $_SERVER['REMOTE_ADDR'];
if($bal < $amo){
	echo "Insufficient Fund : ".$bal."₹";
} else {
$sql = "INSERT INTO colordata (user,gameid,amo,wamo,bet,result)
values ('$user','$gameid','$amo','Pending','$button','Pending')";
 $result = mysqli_query($conn, $sql);
 $uup="UPDATE user SET bal='$realamo' WHERE mail='$user'";
                   $uprun=mysqli_query($conn,$uup);
            echo 'Bet Successful On '.$button.' <i class="fa fa-check-circle" style="font-size:1rem;color:green"></i>';
}
?>