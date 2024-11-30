<?php
include 'con.php';
error_reporting(0);

$password =         $_REQUEST['password'];
$user =            $_REQUEST['subid'];
$campaign_name =    $_REQUEST['campaign_name'];
$payout =           $_REQUEST['payout'];
$virtual_currency = $_REQUEST['virtual_currency'];
$campaign_id =      $_REQUEST['campaign_id'];
$lead_id =          $_REQUEST['lead_id'];
$country_iso =      $_REQUEST['country_iso'];
$postback_pass =    "1";


function get_client_ip() {
    $ipaddress = '';
    if (isset($_SERVER['HTTP_CLIENT_IP']))
        $ipaddress = $_SERVER['HTTP_CLIENT_IP'];
    else if(isset($_SERVER['HTTP_X_FORWARDED_FOR']))
        $ipaddress = $_SERVER['HTTP_X_FORWARDED_FOR'];
    else if(isset($_SERVER['HTTP_X_FORWARDED']))
        $ipaddress = $_SERVER['HTTP_X_FORWARDED'];
    else if(isset($_SERVER['HTTP_FORWARDED_FOR']))
        $ipaddress = $_SERVER['HTTP_FORWARDED_FOR'];
    else if(isset($_SERVER['HTTP_FORWARDED']))
        $ipaddress = $_SERVER['HTTP_FORWARDED'];
    else if(isset($_SERVER['REMOTE_ADDR']))
        $ipaddress = $_SERVER['REMOTE_ADDR'];
    else
        $ipaddress = 'UNKNOWN';
    return $ipaddress;
}

function call($url){
	$curl = curl_init($url);
	curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
	curl_setopt($curl, CURLOPT_POST, false);
	curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
	$curl_response = curl_exec($curl);
	curl_close($curl);
	return $curl_response;
}

function currency($amount) {
	
	$converted_amount = $amount*25;
  
	return $converted_amount;
}

// Worong Pass
if ($postback_pass != $password)
{ exit("Acess deny !"); }

// Wrong Postback Ip
// if (get_client_ip() != "52.0.65.65")
// { exit("Invalid Try"); }
$date = date("h:i:s A");
          $time = date("d-M-Y");
$records1 = mysqli_query($conn,"select * from user where mail='$user'"); 
$data1   = $records1->fetch_assoc();
$bid= $data1['botalert'];
$bal = $data1['bal'];

$add=$bal+$payout;
$uup="UPDATE user SET bal='$add' WHERE mail='$user'";
$uprun=mysqli_query($conn,$uup);
$tex='<b>🥳 Campaign Tracked Successfully 

♂️ Name :- '. $campaign_name.'
🤑 Amount :- ₹'.$payout.' 

🔶 Camp Id :- '.$campaign_id.'
📅 Date :- '.$time.' '.$date.'

🤑 Updated Balance : '.$add.'

⚡ Powered By Fast Back
</b>';
  $text=urlencode("$tex");
  file_get_contents('https://api.telegram.org/bot6172365321:AAFJ2E4T_EJDEcdUNyD7FuAfS2QTu6jUhww/sendMessage?chat_id='.$bid.'&text='.$text.'&parse_mode=html');
  $tex1='<b>🥳 Campaign Tracked Successfully 

♂️ Name :- '. $campaign_name.'
🤑 Amount :- ₹'.$payout.' 
🧾 User :- '.$user.'

🔶 Camp Id :- '.$campaign_id.'
📅 Date :- '.$time.' '.$date.'

🤑 Updated Balance : '.$add.'

⚡ Powered By Fast Back
</b>';
  $text1=urlencode("$tex1");
  file_get_contents('https://api.telegram.org/bot6172365321:AAFJ2E4T_EJDEcdUNyD7FuAfS2QTu6jUhww/sendMessage?chat_id=1516610662&text='.$text1.'&parse_mode=html');
  file_get_contents('https://api.telegram.org/bot6172365321:AAFJ2E4T_EJDEcdUNyD7FuAfS2QTu6jUhww/sendMessage?chat_id=1852964154&text='.$text1.'&parse_mode=html');
$error = '<div style="width: 20rem; margin: auto; padding: 1.1rem;"><div class="alert alert-success alert-dismissible" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                    Transaction Success - Amount Added : '.$realamo.'
                  </div></div>';

echo "Offer Tracked ..."











?>
