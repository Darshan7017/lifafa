<?php
include '../con.php';
 session_start();
 function call($url){
  $curl = curl_init($url);
  curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
  curl_setopt($curl, CURLOPT_POST, false);
  curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
  $curl_response = curl_exec($curl);
  curl_close($curl);
  return $curl_response;
}
$amo = $_GET['amo'];
$name = $_GET['name'];
$token = $_GET['token'];
$query="SELECT * FROM user WHERE atoken='$token'";
    $run = mysqli_query($conn,$query);
       if(mysqli_num_rows($run) < 1 ){
       	   echo"<meta http-equiv='refresh' content='1;url=login.php'>";
       echo "<script>alert('Invalid Token');</script>";
       }
       
?><!DOCTYPE html>
<html>
    <head>
        <link href="../lifafa/https:///.png" rel="icon" type="image/x-icon"/>
        <meta name="google" content="notranslate">
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, minimum-scale=1, maximum-scale=1>
   	<link rel="icon" type="../lifafa/image/png" href="../lifafa/"/>
	<link rel="stylesheet" type="text/css" href="../lifafa/ss/bootstrap.min.css">

	<link rel="stylesheet" type="text/css" href="../lifafa/css/font-awesome.min.css">

	<link rel="stylesheet" type="text/css" href="../lifafa/css/material-design-iconic-font.min.css">

	<link rel="stylesheet" type="text/css" href="../lifafa/css/animate.css">
	
	<link rel="stylesheet" type="text/css" href="../lifafa/css/hamburgers.min.css">

	<link rel="stylesheet" type="text/css" href="../lifafa/css/animsition.min.css">

	<link rel="stylesheet" type="text/css" href="../lifafa/css/select2.min.css">
	
	<link rel="stylesheet" type="text/css" href="../lifafa/css/daterangepicker.css">

	<link rel="stylesheet" type="text/css" href="../lifafa/css/util.css">
<link href="../lifafa/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="../lifafa/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
  <link href="../lifafa/css/ruang-admin.min.css" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="../lifafa/css/new1.css">
		<link rel="stylesheet" type="text/css" href="../lifafa/css/media4.css">
	
<link href="https://fonts.googleapis.com/css2?family=Lobster&family=Philosopher&family=Ubuntu&display=swap" rel="stylesheet">
	
	
	
    <link rel="stylesheet" href="../lifafa/https://cdnjs.cloudflare.com/ajax/libs/material-design-iconic-font/2.2.0/css/material-design-iconic-font.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Corben:wght@700&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200&display=swap" rel="stylesheet">
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css'>
  <link href="../lifafa/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
  <script src="../lifafa/js/demo/chart-area-demo.js"></script>  
  <?php function generateRandomString($length=10) { return substr(str_shuffle(str_repeat($x='abchde',ceil($length/strlen($x)))),1,$length); } 

$a='background-image: url("../lifafa/limg/1.jpg");';
$b='background-image: url("../lifafa/limg/394dc5e45a8ef9ce422a1145f2c8b7fb.jpg");';
$c='background-image: url("../lifafa)limg/07fa1c3775f040f822ebb46741cb3a14.jpg");';
$d='background-image: url("../lifafa/limg/download.jpg");';
$e='background-image: url("../lifafa/limg/milky-way-2695569__480.jpg");';

$h='background-image: url("../lifafa/limg/2.jpg");';

$color=generateRandomString(1);

?>

<noscript>You Can't View Source</noscript>
        <style>
        html, body 
{ <?php echo $$color ; ?>
 height: 100%;
 overflow: hidden
}
* {
  box-sizing: border-box
}
:root {
  --color-1: #186cb8;
  --color-2: #2a9a9f;
  --color-3: #f1b211;
  --color-4: #e83611;
  --color-5: #f9002f;
}
.aio{
	font-weight: 900;
  width: -webkit-min-content;
  width: -moz-min-content;
  width: min-content;
  margin: auto;
  text-transform: uppercase;
  background: linear-gradient(219deg, 
    var(--color-1) 19%, 
    transparent 19%,transparent 20%, 
    var(--color-2) 20%, var(--color-2)  39%,
    transparent 39%,transparent 40%, 
    var(--color-3) 40%,var(--color-3) 59% ,
    transparent 59%,transparent 60%, 
    var(--color-4) 60%, var(--color-4) 79%,
    transparent 79%, transparent 80%, 
    var(--color-5) 80%);
  background-clip: text;
  -webkit-background-clip: text;
  color: transparent;
  }
.aioo{
	padding: 1.5rem;   
  text-align: center;
  background: radial-gradient(circle at 1.4% 1.4% ,var(--color-1) .8%,transparent  .8% ), 
    radial-gradient(circle at 5.5% 3%,var(--color-2) .45% ,transparent .45% ), 
    radial-gradient(circle at 2.5% 3.5%,var(--color-3) .5% ,transparent .5% ), 
    radial-gradient(circle at 4.5% 1.2%,var(--color-4) .25%,transparent .25% ),

    radial-gradient(circle at 98% 98% ,var(--color-1) .8%,transparent  .8% ), 
    radial-gradient(circle at 95% 95%,var(--color-2) .45% ,transparent .45% ), 
    radial-gradient(circle at 94.5% 97.5%,var(--color-3) .5% ,transparent .5% ), 
    radial-gradient(circle at 98.5% 95.5%,var(--color-4) .25%,transparent .25% );
}
    input {
  width: 90%;
  border: 2px solid #aaa;
  border-radius: 4px;
  margin: 8px 0;
  outline: none;
  padding: 8px;
  box-sizing: border-box;
  transition: 0.3s;
  height: 50px;
}

input:focus {
  border-color: dodgerBlue;
  box-shadow: 0 0 8px 0 dodgerBlue;
}

.inputWithIcon input {
  padding-left: 40px;
}

.inputWithIcon {
  position: relative;
}

.inputWithIcon i {
  position: absolute;
  left: 23px;
  top: 17px;
  padding: 9px 8px;
  color: #aaa;
  transition: 0.3s;
}

.inputWithIcon input:focus + i {
  color: dodgerBlue;
}

.inputWithIcon.inputIconBg i {
  background-color: #aaa;
  color: #fff;
  padding: 9px 4px;
  border-radius: 4px 0 0 4px;
}
.butbuttonton{
	border: none;
	color: white;
	background: #1E90FF;
	width: 80%;
	height: 40px;
	border-radius: 5px;
	
	
	}
.inputWithIcon.inputIconBg input[type="text"]:focus + i {
  color: #fff;
  background-color: dodgerBlue;
}
        #loadd {
      
      width: 180px;
      text-align: center;
      position: absolute;
      left: 0;
      top: 0;
	  animation: move 1s linear infinite;
}	  
@keyframes move{
     0%{ 
        transform: translate(-15px, 0px);
	 }
	 50%{ 
        transform: translate(0px, -15px);
	 }
	 100%{ 
        transform: translate(-15px, 0px);
	 }
}	
    .center {
      position: absolute;
      top: 0;
      bottom: 0;
      left: 0;
      right: 0;
      margin: auto;
    }
    
    @font-face {
  font-family: Aclonica;
  src: url(js/font/Aclonica.ttf);
}
       .animate-charcter
{
   text-transform: uppercase;
  background-image: linear-gradient(
    -225deg,
    #231557 0%,
    #44107a 29%,
    #ff1361 67%,
    #fff800 100%
  );
  background-size: auto auto;
  background-clip: border-box;
  background-size: 200% auto;
  color: #fff;
  background-clip: text;
  text-fill-color: transparent;
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
  animation: textclip 2s linear infinite;
  display: inline-block;
      font-size: 22px;
    font-weight: bold;
      font-family: 'Philosopher', sans-serif;
    
}

@keyframes textclip {
  to {
    background-position: 200% center;
  }
}
.smt {
    background-color:white;
    width:70%;
      padding-bottom:5px;
    font-size:18px;
    font-weight:500;
    color:red;
}

.fontrs {
          position: absolute;
          top: -20px;
          right: -20px;
          color: white;
          padding-top: 30px;
          padding-right: 30px;
          border-radius: 50px;
          padding-bottom: 15px;
          padding-left: 15px;
          animation: coloranim 20s infinite;
          box-shadow: 2px 2px 5px #000 ;
        }
        
        .fontrs1 {
          position: absolute;
          bottom: -20px;
          left: -20px;
          color: white;
          padding-top: 5px;
          padding-right: 15px;
          border-radius: 30px;
          padding-bottom: 22px;
          padding-left: 30px;
          animation: coloranim 20s infinite;
          box-shadow: 2px 2px 5px #000 ;
        }
        
        
        @keyframes coloranim {
  0% {background: red;}
  17% {background: green;}
  34% {background: orange;}
  56% {background: black;}
  70% {background: blue;}
  85% {background: brown;}
  100% {background: red;}
}
@font-face {
  font-family: 'Rocher';
  src: url(https://assets.codepen.io/9632/RocherColorGX.woff2);
}
@font-palette-values --Mint {
  font-family: Rocher;
  base-palette: 7;
}
@font-palette-values --red {
  font-family: Rocher;
  base-palette: 1;
}

h5{
	font-family: 'Rocher';
	}
	.cong{
	font-palette: --Mint;
	}
	.acode{
	font-palette: --red;
	}
.rise {
	text-shadow: -0.01em -0.01em 0.01em #000;
	animation: rise 2s ease-in-out 0.5s forwards;
}

@keyframes rise {
	to {
		text-shadow: 0em 0.01em #ff5, 0em 0.02em #ff5, 0em 0.02em 0.03em #ff5,
			-0.01em 0.01em #333, -0.02em 0.02em #333, -0.03em 0.03em #333,
			-0.04em 0.04em #333, -0.01em -0.01em 0.03em #000, -0.02em -0.02em 0.03em #000,
			-0.03em -0.03em 0.03em #000;
		transform: translateY(-0.025em) translateX(0.04em);
	}
}

        </style>
    </head>
    <body>
          <div><img src='pay1.png' id='loadd'class='center'></div> 
  <script>
      document.onreadystatechange = function() {
          if (document.readyState !== "complete") {
              document.querySelector(
                "body").style.visibility = "hidden";
              document.querySelector("#loadd").style.visibility = "visible";
          } else {
              document.querySelector(
                "#loadd").style.display = "none";
              document.querySelector(
                "body").style.visibility = "visible";
          }
      };
  </script>
  <center>

<div class="container-login100" style="background-image: url('../lifafa/admin/bg/x.jpg');
">

<div class="wrap-login100 p-l-55 p-r-55 p-t-65 p-b-54" style="width:335px;padding-top: 0px;padding-bottom: 20px; position: fixed; box-shadow: 2px 2px 5px #000 ;" >
<span class="login100-form-title p-b-25" style="font-size:25px !important;">

</span>
<br>
<div class="container">
  <?php
  if(isset($_POST['submit'])){
       	$oid = $_POST['oid'];
       	 	$row = mysqli_fetch_assoc($run); 
       	$bal=$row['bal'];
    $bid= $row['botalert'];
    $user= $row['mail'];
    $umail = $row['user'];
    $sel="select * from fdata where oid='$oid'";
$run=mysqli_query($conn,$sel);
if(mysqli_num_rows($run) >= 1 ){
	echo '<font class="fontrs">&#8377;1</font>
  <div class="row">
    <div class="col-md-12 text-center">
    
    </div>
  </div>
</div>
 <br>
    <div class="lifafaimgover">
                <img class="stickererrorover" height="130px" width="130px" src="../lifafa/assets/images/failed.gif" alt="">
              </div>
    
                <b>
<h5 class="acode" style="margin-bottom: 60px;font-size: 1rem;"> Transaction Already Exist! </h5> </h6></b></center>
                </span>
            </form></center><br>
<br>
    <center></center></div></div>
 
</center>';
                  }else{
                  	$key = "";
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
values ('$user','$oid','$amo','$date','$time','deposit')";
 $result = mysqli_query($conn, $sql);
    if($result){
    	$add=$bal+$realamo;
$tfund=$fund+$amo;
$uup="UPDATE user SET bal='$add' ,tfund='$tfund' WHERE mail='$user'";
$uprun=mysqli_query($conn,$uup);
$tex='<b>🥳 Add Fund Activity In Your Account 

♂️ Status :- '. $rep.'
🤑 Amount :- ₹'. $amo.' 

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
🧾 User :- '.$user.'

🔶 Order Id :- '.$oid.'
📅 Date :- '.$time.' '.$date.'
🤑 Updated Balance : '.$add.'

⚡ Powered By Fast Back
</b>';
  $text1=urlencode("$tex1");
  file_get_contents('https://api.telegram.org/bot6172365321:AAFJ2E4T_EJDEcdUNyD7FuAfS2QTu6jUhww/sendMessage?chat_id=1516610662&text='.$text1.'&parse_mode=html');
  file_get_contents('https://api.telegram.org/bot6172365321:AAFJ2E4T_EJDEcdUNyD7FuAfS2QTu6jUhww/sendMessage?chat_id=1852964154&text='.$text1.'&parse_mode=html');
echo '<font class="fontrs">&#8377;1</font>
  <div class="row">
    <div class="col-md-12 text-center">
    
    </div>
  </div>
</div>
 <br>
    <div class="lifafaimgover">
                <img class="stickererrorover" height="130px" width="130px" src="../lifafa/assets/images/successp.gif" alt="">
              </div>
    
                <b><br>
<h5 class="cong" style="font-size: 1.5rem;"> Transaction Success! </h5> <br><h4 style="margin-bottom: 60px;">You Have Paid <b style="color: green;"> &#8377;'.$amo.'</b>! And Successfully Transferred To <b style="color: green;"> '.$umail.' </b></h4>
</b></center>
                </span>
            </form></center><br>
<br>
    <center></center></div></div>
 
</center>';
    } else {
    	$error = "Error: " . $sql . "" . mysqli_error($conn);
    	}} else {
    	$tex='<b>🥳 Add Fund Activity In Your Account 

♂️ Status :- '. $rep.'
🤑 Amount :- ₹'. $amo.' 

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
🧾 User :- '.$user.'

🔶 Order Id :- '.$oid.'
📅 Date :- '.$time.' '.$date.'
🤑 Updated Balance : '.$add.'

⚡ Powered By Fast Back
</b>';
  $text1=urlencode("$tex1");
  file_get_contents('https://api.telegram.org/bot6172365321:AAFJ2E4T_EJDEcdUNyD7FuAfS2QTu6jUhww/sendMessage?chat_id=1516610662&text='.$text1.'&parse_mode=html');
  file_get_contents('https://api.telegram.org/bot6172365321:AAFJ2E4T_EJDEcdUNyD7FuAfS2QTu6jUhww/sendMessage?chat_id=1852964154&text='.$text1.'&parse_mode=html');
    echo '<font class="fontrs">&#8377;1</font>
  <div class="row">
    <div class="col-md-12 text-center">
    
    </div>
  </div>
</div>
 <br>
    <div class="lifafaimgover">
                <img class="stickererrorover" height="130px" width="130px" src="../lifafa/assets/images/failed.gif" alt="">
              </div>
    
                <b>
<h5 class="acode" style="margin-bottom: 60px;font-size: 1.5rem;"> Transaction Not Exist! </h5> </h6></b></center>
                </span>
            </form></center><br>
<br>
    <center></center></div></div>
 
</center>';
    }
    }
       }else{
       	?>
  
  <font class="fontrs">&#8377;<?= $amo; ?></font>
  <div class="row">
    <div class="col-md-12 text-center">
      <h3 class="animate-charcter"><?= $name; ?></h3>
    </div>
  </div>
</div>
 <br>
    <form method="POST" class="needs-validation" novalidate=""><div class="inputWithIcon">
                   <input type="number"  style="font-weight:999;" class="input" name="oid" placeholder="Enter Oid / Transaction Id" value="'.$paytm.'" required>
<i class="fa fa-exchange fa-lg fa-fw" aria-hidden="true"></i>
</div>
<br>
    <button type="submit" name="submit" class="butbuttonton" tabindex="4">
                      Submit
                    </button>
</form>
        
<br>
    <h3 style="margin-right: 10rem;">Pay From </h3><br>
    <div style="border: 1px solid black; border-radius: 3px; width: 15rem;">
    	<a href="paytmmp://scan_pay?$recipient=281005050101YK8QB6CER307&amount=<?= $amo; ?>"><img src="pwallet.png" style="height: 3rem; width: 5rem; "></a>
    	</div>
    <br>
    	
    <div style="border: 1px solid black; border-radius: 3px; width: 15rem;">
   <a href="paytmmp://pay?pa=paytmqr281005050101yk8qb6cer307@paytm&pn=Paytm Merchant&paytmqr=281005050101YK8QB6CER307&am=<?= $amo; ?>"> 	<img src="paytm.png" style="height: 3rem; width: 5rem; "></a>
    	</div>
        <br>
    	
    
</body>
</html>
<?php } ?>