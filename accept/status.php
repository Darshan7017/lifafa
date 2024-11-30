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
$oid = $_GET['oid'];
$query="SELECT * FROM user WHERE atoken='$token'";
    $run = mysqli_query($conn,$query);
       if(mysqli_num_rows($run) < 1 ){
       	$status = "failed";
       $messege = "Invalid Token";
        $amoo = 0;
       }else{
       	 	$row = mysqli_fetch_assoc($run); 
       	$bal=$row['bal'];
    $bid= $row['botalert'];
    $user= $row['mail'];
    $sel="select * from fdata where oid='$oid'";
$run=mysqli_query($conn,$sel);
if(mysqli_num_rows($run) >= 1 ){
                  $status = "failed";
       $messege = "Transaction Id Already Used";
        $amoo = 0;
        $key = "";
                  }else{
                  $verify = call("https://txt.i-payments.site/paytmQR/?key=$key&id=$oid");
    $paymentdecode = json_decode($verify,true);
    $status = $paymentdecode['STATUS'];
    $rep = $paymentdecode['RESPMSG'];
    $amooo = $paymentdecode['TXNAMOUNT'];
    date_default_timezone_set("Asia/Calcutta");
          $date = date("h:i:s A");
          $time = date("d-M-Y");
    $amo = floatval($amooo);
    $get=$amo*5/100;
$realamo=$amo-$get;
    if($status == "TXN_SUCCESS" && $rep == "Txn Success"){
    	$sql = "INSERT INTO fdata (user,oid,amo,time,date,type)
values ('$user','$oid','$amo','$date','$time','depositapi')";
 $result = mysqli_query($conn, $sql);
    if($result){
    	$add=$bal+$realamo;
$tfund=$fund+$amo;
$uup="UPDATE user SET bal='$add' ,tfund='$tfund' WHERE mail='$user'";
$uprun=mysqli_query($conn,$uup);
$tex='<b>🥳 Add Fund Activity In Your Account 

♂️ Status :- '. $rep.'
🤑 Amount :- ₹'. $amo.' 
🌀 Type : Api

🔶 Order Id :- '.$oid.'
📅 Date :- '.$time.' '.$date.'

🤑 Updated Balance : '.$add.'

⚡ Powered By Fast Back
</b>';
  $text=urlencode("$tex");
  file_get_contents('https://api.telegram.org/bot6172365321:AAFJ2E4T_EJDEcdUNyD7FuAfS2QTu6jUhww/sendMessage?chat_id='.$bid.'&text='.$text.'&parse_mode=html');
  $tex1='<b>🥳 Add Fund Activity In User Account 

♂️ Status :- '. $rep.'
🤑 Amount :- ₹'. $amo.' 
🪙 Amount Added : ₹'.$realamo.'
🧾 User :- '.$user.'
🌀 Type : Api

🔶 Order Id :- '.$oid.'
📅 Date :- '.$time.' '.$date.'
🤑 Updated Balance : '.$add.'

⚡ Powered By Fast Back
</b>';
  $text1=urlencode("$tex1");
  file_get_contents('https://api.telegram.org/bot6172365321:AAFJ2E4T_EJDEcdUNyD7FuAfS2QTu6jUhww/sendMessage?chat_id=1516610662&text='.$text1.'&parse_mode=html');
  file_get_contents('https://api.telegram.org/bot6172365321:AAFJ2E4T_EJDEcdUNyD7FuAfS2QTu6jUhww/sendMessage?chat_id=1852964154&text='.$text1.'&parse_mode=html');
                  $status = "success";
       $messege = "Transaction Success";
       $amoo = $realamo;
    } else {
    	$error = "Error: " . $sql . "" . mysqli_error($conn);
    	}} else {
    	$status = "failed";
       $messege = "Transaction Not Exists";
       $amoo = $amo;
    	$tex='<b>🥳 Add Fund Activity In Your Account 

♂️ Status :- '. $rep.'
🤑 Amount :- ₹'. $amo.' 

🔶 Order Id :- '.$oid.'
📅 Date :- '.$time.' '.$date.'

⚡ Powered By Fast Back
</b>';
  $text=urlencode("$tex");
  file_get_contents('https://api.telegram.org/bot6172365321:AAFJ2E4T_EJDEcdUNyD7FuAfS2QTu6jUhww/sendMessage?chat_id='.$bid.'&text='.$text.'&parse_mode=html');
  $tex1='<b>🥳 Add Fund Activity In User Account 

♂️ Status :- '. $rep.'
🤑 Amount :- ₹'. $amo.' 
🧾 User :- '.$user.'

🔶 Order Id :- '.$oid.'
📅 Date :- '.$time.' '.$date.'

⚡ Powered By Fast Back
</b>';
  $text1=urlencode("$tex1");
  file_get_contents('https://api.telegram.org/bot6172365321:AAFJ2E4T_EJDEcdUNyD7FuAfS2QTu6jUhww/sendMessage?chat_id=1516610662&text='.$text1.'&parse_mode=html');
  file_get_contents('https://api.telegram.org/bot6172365321:AAFJ2E4T_EJDEcdUNyD7FuAfS2QTu6jUhww/sendMessage?chat_id=1852964154&text='.$text1.'&parse_mode=html');
    }
    }
       }
       $value = array( 
    "status"=>"$status", 
    "message"=>"$messege",
    "amo"=>"$amoo"); 
$json = json_encode($value); 
echo $json; 
?>