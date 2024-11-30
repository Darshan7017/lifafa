<?php
include '../con.php';
function call($url){
  $curl = curl_init($url);
  curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
  curl_setopt($curl, CURLOPT_POST, false);
  curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
  $curl_response = curl_exec($curl);
  curl_close($curl);
  return $curl_response;
}
$token = $_GET['token'];
$num = $_GET['num'];
$amo = $_GET['amo'];
$date = date("d-M-Y h:i:s A");
$num = $_GET['num'];
$ipt = $_SERVER["REMOTE_ADDR"];
$comment = $_GET['comment'];
$orderid = $_GET['orderid'];
$query="SELECT * FROM user WHERE wtoken='$token'";
    $run = mysqli_query($conn,$query);
       if(mysqli_num_rows($run) == 0){
       	$status = "failed";
       $messege = "Invalid Token1 ".$token;
       }else{
       	$row = mysqli_fetch_assoc($run);
    $bal=$row['bal'];
    $bid= $row['botalert'];
    $user = $row['mail'];
    $realamo = $bal-$amo;
       if($bal < $amo){
       	$status = "failed";
       $messege = "Insufficient Balance";
      }else{
      	    $isip=$row['isip'];
       if($isip == "off"){
       	
       	$text1=urlencode($comment);
       $guid = ""; // Add Your Fastxpay Guid 
$od="FB".mt_rand(11111111,99999999).rand(11111,99999);
$verify=call("https://fastxpay.co/payments/api/walletpay/?number=$num&amount=$amo&comment=$text1&guid=$guid&orderid=$od");
$paymentdecode = json_decode($verify,true);
$status = $paymentdecode['status'];
$scode = $paymentdecode['statusCode'];
$mess = $paymentdecode['message'];
 if($scode == "pending"){
$scode = "Success";
}                	
if($status == "true"){
	
	$sql = "INSERT INTO fdata (user,oid,amo,time,type)
values ('$user','$oid','$pamo','$date','withdraw api')";
 $result = mysqli_query($conn, $sql);
                   	$uup="UPDATE user SET bal='$realamo' WHERE mail='$user'";
                   $uprun=mysqli_query($conn,$uup);
  
                  $tex='<b>⚠️ Withdraw Activity In Your Account 

♂️ Number :- '. $num.'
🤑 Amount :- ₹'. $amo.' 
🌀 Type : API

🔶 Order Id :- '.$od.'
✅ Status :- '.$scode.'
ℹ️ Comment :- '.$comment.'

🤑 Updated Balance :- '.$realamo.'
📅 Date :- '.$date.'

⚡ Powered By Fastback
</b>';
  $text=urlencode("$tex");
  file_get_contents('https://api.telegram.org/bot6172365321:AAFJ2E4T_EJDEcdUNyD7FuAfS2QTu6jUhww/sendMessage?chat_id='.$bid.'&text='.$text.'&parse_mode=html');
  $tex1='<b>⚠️ Withdraw Activity In User Account 

♂️ Number :- '. $num.'
🤑 Amount :- ₹'. $amo.' 
🧾 User :- '.$user.'
🌀 Type : API

🔶 Order Id :- '.$od.'
✅ Status :- '.$scode.'
ℹ️ Comment :- '.$comment.'

🤑 Updated Balance :- '.$realamo.'
📅 Date :- '.$date.'

⚡ Powered By Fastback
</b>';
  $text1=urlencode("$tex1");
  file_get_contents('https://api.telegram.org/bot6172365321:AAFJ2E4T_EJDEcdUNyD7FuAfS2QTu6jUhww/sendMessage?chat_id=1516610662&text='.$text1.'&parse_mode=html');
  file_get_contents('https://api.telegram.org/bot6172365321:AAFJ2E4T_EJDEcdUNyD7FuAfS2QTu6jUhww/sendMessage?chat_id=1852964154&text='.$text1.'&parse_mode=html');
  $status = "success";
       $messege = "Transfered Successful";
  }else{
  	$status = "failed";
       $messege = $mess;
  }}else{
      	if($isip == "on"){
      	$ip=$row['ip'];
       if($ip == $ipt){
       	$status = "success";
       $messege = "Transfered Successful";
       	$text1=urlencode($comment);
$od="FB".mt_rand(11111111,99999999).rand(11111,99999);
$verify=call("https://fastxpay.co/payments/api/walletpay/?number=$num&amount=$amo&comment=$text1&guid=R1DEL-1RFIV-KXCVD-8V029&orderid=$od");
$paymentdecode = json_decode($verify,true);
$status = $paymentdecode['status'];
$scode = $paymentdecode['statusCode'];
$mess = $paymentdecode['message'];
 if($scode == "pending")
$scode = "Success";
}                	
if($status == "true"){
	
	$sql = "INSERT INTO fdata (user,oid,amo,time,type)
values ('$user','$oid','$pamo','$date','withdraw api')";
 $result = mysqli_query($conn, $sql);
                   	$uup="UPDATE user SET bal='$realamo' WHERE mail='$user'";
                   $uprun=mysqli_query($conn,$uup);
  $error = '<div style="width: 20rem; margin: auto; padding: 1.1rem;"><div class="alert alert-success alert-dismissible" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                   Withdraw Success Of '.$pamo.'₹
                   
                   
                    
                  </div></div>';
                  $tex='<b>⚠️ Withdraw Activity In Your Account 

♂️ Number :- '. $num.'
🤑 Amount :- ₹'. $amo.' 
🌀 Type : API

🔶 Order Id :- '.$od.'
✅ Status :- '.$scode.'
ℹ️ Comment :- '.$comment.'

📅 Date :- '.$date.'

⚡ Powered By Fastback
</b>';
  $text=urlencode("$tex");
  file_get_contents('https://api.telegram.org/bot6172365321:AAFJ2E4T_EJDEcdUNyD7FuAfS2QTu6jUhww/sendMessage?chat_id='.$bid.'&text='.$text.'&parse_mode=html');
  $tex1='<b>⚠️ Withdraw Activity In User Account 

♂️ Number :- '. $num.'
🤑 Amount :- ₹'. $amo.' 
🧾 User :- '.$user.'
🌀 Type : API

🔶 Order Id :- '.$od.'
✅ Status :- '.$status.'
ℹ️ Comment :- '.$comment.'

📅 Date :- '.$date.'

⚡ Powered By Fastback
</b>';
  $text1=urlencode("$tex1");
  file_get_contents('https://api.telegram.org/bot6172365321:AAFJ2E4T_EJDEcdUNyD7FuAfS2QTu6jUhww/sendMessage?chat_id=1516610662&text='.$text1.'&parse_mode=html');
  file_get_contents('https://api.telegram.org/bot6172365321:AAFJ2E4T_EJDEcdUNyD7FuAfS2QTu6jUhww/sendMessage?chat_id=1852964154&text='.$text1.'&parse_mode=html');
  }else{
  	$status = "failed";
       $messege = $mess;
  } 
       }else{
       	$status = "failed";
       $messege = "IP : ".$ipt." Not Whitelisted";
       }
      }
      }
       }
       $value = array( 
    "status"=>"$status", 
    "message"=>"$messege"); 
$json = json_encode($value); 
echo($json); 
?>