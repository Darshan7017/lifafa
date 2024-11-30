<?php
$oid = $_GET['oid'];
function call($url){
  $curl = curl_init($url);
  curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
  curl_setopt($curl, CURLOPT_POST, false);
  curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
  $curl_response = curl_exec($curl);
  curl_close($curl);
  return $curl_response;
}
$guid = ""; // Add Your fastxpay guid
$verify=call("https://fastxpay.co/payments/api/v2/fetchstatus/?secret=TCYS7QW9AZ&guid=$guid&order_id=$oid");
$paymentdecode = json_decode($verify,true);
$status = $paymentdecode['statusCode'];
$scode = $paymentdecode['status'];
$mess = $paymentdecode['message'];
$value = array( 
    "status"=>"$status", 
    "statusCode"=>"$scode",
     "message"=>"$mess"); 
$json = json_encode($value); 
echo($json); 
?>