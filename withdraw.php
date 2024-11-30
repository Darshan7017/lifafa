<?php
include 'con.php';
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
 $user=$_COOKIE["user"];
$error="";
$records1 = mysqli_query($conn,"select * from user where mail='$user'"); 
$data1   = $records1->fetch_assoc();
$bid= $data1['botalert'];
$bal = $data1['bal'];
$wfund = $data1['wfund'];
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
  if(isset($_POST['submit'])) {
$amo=$_POST['amo'];
$pnum=$_POST['pnum'];
$com=urlencode($_POST['com']);
if($amo<1){
echo'<div style="width: 20rem; margin: auto; padding: 1.1rem;"><div class="alert alert-danger alert-dismissible" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                    Minimum Withdraw Fund Is ₹1
                  </div></div>';
   }else{
   	
 $mob=$_POST['mob'];
 $amo=$_POST['amo'];
 $com=$_POST['com'];   
$url="https://deadlylooter.xyz";
$myArray=explode(',',$mob);
$nums = count($myArray);
$pamo = $nums*$amo;
$realamo = $bal-$pamo;
$wfun = $pamo+$wfund;
$date = date("d-M-Y h:i:s A");
if($bal<$pamo){
$error = '<div style="width: 20rem; margin: auto; padding: 1.1rem;"><div class="alert alert-danger alert-dismissible" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                    Insufficient Balance : '.$pamo.'₹
                  </div></div>';
                   }else{
                   	
    foreach($myArray as $item) {
$text1=urlencode($com);
$guid = ""; // Add Your fastxpay guid
$od="FB".mt_rand(11111111,99999999).rand(11111,99999);
$verify=call("https://fastxpay.co/payments/api/walletpay/?number=$item&amount=$amo&comment=$text1&guid=$guid&orderid=$od");
$paymentdecode = json_decode($verify,true);
$status = $paymentdecode['status'];
$scode = $paymentdecode['statusCode'];
$mess = $paymentdecode['message'];
 if($scode == "pending"){
$scode = "Success";
}                	
if($status == "true"){
	
	$sql = "INSERT INTO fdata (user,oid,amo,time,type)
values ('$user','$oid','$pamo','$date','withdraw')";
 $result = mysqli_query($conn, $sql);
                   	$uup="UPDATE user SET bal='$realamo' WHERE mail='$user'";
                   $uprun=mysqli_query($conn,$uup);
                   $uup1="UPDATE user SET wfund='$wfun' WHERE mail='$user'";
                   $uprunw=mysqli_query($conn,$uup1);
  $error = '<div style="width: 20rem; margin: auto; padding: 1.1rem;"><div class="alert alert-success alert-dismissible" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                   Withdraw Success Of '.$pamo.'₹
                   
                   
                    
                  </div></div>';
                  $tex='<b>⚠️ Withdraw Activity In Your Account 

♂️ Number :- '. $item.'
🤑 Amount :- ₹'. $amo.' 

🔶 Order Id :- '.$od.'
✅ Status :- '.$scode.'
ℹ️ Comment :- '.$com.'

🤑 Updated Balance :- ₹'.$realamo.'
📅 Date :- '.$date.'

⚡ Powered By Fastback
</b>';
  $text=urlencode("$tex");
  file_get_contents('https://api.telegram.org/bot6172365321:AAFJ2E4T_EJDEcdUNyD7FuAfS2QTu6jUhww/sendMessage?chat_id='.$bid.'&text='.$text.'&parse_mode=html');
  $tex1='<b>⚠️ Withdraw Activity In User Account 

♂️ Number :- '. $item.'
🤑 Amount :- ₹'. $amo.' 
🧾 User :- '.$user.'

🔶 Order Id :- '.$od.'
✅ Status :- '.$scode.'
ℹ️ Comment :- '.$com.'

🤑 Updated Balance :- ₹'.$realamo.'
📅 Date :- '.$date.'

⚡ Powered By Fastback
</b>';
  $text1=urlencode("$tex1");
  file_get_contents('https://api.telegram.org/bot6172365321:AAFJ2E4T_EJDEcdUNyD7FuAfS2QTu6jUhww/sendMessage?chat_id=1516610662&text='.$text1.'&parse_mode=html');
  file_get_contents('https://api.telegram.org/bot6172365321:AAFJ2E4T_EJDEcdUNyD7FuAfS2QTu6jUhww/sendMessage?chat_id=1852964154&text='.$text1.'&parse_mode=html');
  }else{
  	$tex='<b>⚠️ Withdraw Activity In Your Account 

♂️ Number :- '. $item.'
🤑 Amount :- ₹'. $amo.' 

🔶 Order Id :- '.$od.'
✅ Status :- '.$scode.'
ℹ️ Comment :- '.$com.'

📅 Date :- '.$date.'

⚡ Powered By Fastback
</b>';
  $text=urlencode("$tex");
  file_get_contents('https://api.telegram.org/bot6172365321:AAFJ2E4T_EJDEcdUNyD7FuAfS2QTu6jUhww/sendMessage?chat_id='.$bid.'&text='.$text.'&parse_mode=html');
  $tex1='<b>⚠️ Withdraw Activity In User Account 

♂️ Number :- '. $item.'
🤑 Amount :- ₹'. $amo.' 
🧾 User :- '.$user.'

🔶 Order Id :- '.$od.'
✅ Status :- '.$scode.'
ℹ️ Comment :- '.$com.'

📅 Date :- '.$date.'

⚡ Powered By Fastback
</b>';
  $text1=urlencode("$tex1");
  file_get_contents('https://api.telegram.org/bot6172365321:AAFJ2E4T_EJDEcdUNyD7FuAfS2QTu6jUhww/sendMessage?chat_id=1516610662&text='.$text1.'&parse_mode=html');
  file_get_contents('https://api.telegram.org/bot6172365321:AAFJ2E4T_EJDEcdUNyD7FuAfS2QTu6jUhww/sendMessage?chat_id=1852964154&text='.$text1.'&parse_mode=html');
  	$error = '<div style="width: 20rem; margin: auto; padding: 1.1rem;"><div class="alert alert-danger alert-dismissible" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                   Transaction Failed : '.$mess.'
                   
                   
                    
                  </div></div>';
  }
}
}
}
    }
 
 ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link href="img/logo.png" rel="icon">
  <title>Fastback - Withdraw</title>
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
  <link href="css/ruang-admin.min.css" rel="stylesheet">
</head>

<body id="page-top">
	<div id="wrapper">
  <?php include("pages/nav.php");?>
    <!-- Sidebar -->
    	
    <div id="content-wrapper" class="d-flex flex-column">
      <div id="content">
        <!-- TopBar -->
        <nav class="navbar navbar-expand navbar-light bg-navbar topbar mb-4 static-top bg-gradient-info">
          <button id="sidebarToggleTop" class="btn btn-link rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>
          <ul class="navbar-nav ml-auto">
            
            </li>
            </li>
            <li class="nav-item dropdown no-arrow mx-1">
              <a class="nav-link dropdown-toggle" href="lifafa.php"  role="button"
                aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-envelope"></i>
              </a>
             
            </li>
            <li class="nav-item dropdown no-arrow mx-1">
              <a class="nav-link dropdown-toggle" href="addfund.php"  role="button"
                aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-plus"></i>
              </a>
             
            </li>
            </li>
            <li class="nav-item dropdown no-arrow mx-1">
              <a class="nav-link dropdown-toggle" href="withdraw.php"  role="button"
                aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-minus"></i>
              </a>
             
            </li>
     <li class="nav-item dropdown no-arrow mx-1">
              <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-bell fa-fw"></i>
                <span class="badge badge-danger badge-counter">3+</span>
              </a>
              <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"
                aria-labelledby="alertsDropdown">
                <h6 class="dropdown-header">
                  Alerts Center
                </h6>
                <a class="dropdown-item d-flex align-items-center" href="#">
                  <div class="mr-3">
                    <div class="icon-circle bg-primary">
                      <i class="fas fa-file-alt text-white"></i>
                    </div>
                  </div>
                  <div>
                    <div class="small text-gray-500">December 12, 2019</div>
                    <span class="font-weight-bold">A new monthly report is ready to download!</span>
                  </div>
                </a>
                <a class="dropdown-item d-flex align-items-center" href="#">
                  <div class="mr-3">
                    <div class="icon-circle bg-success">
                      <i class="fas fa-donate text-white"></i>
                    </div>
                  </div>
                  <div>
                    <div class="small text-gray-500">December 7, 2019</div>
                    $290.29 has been deposited into your account!
                  </div>
                </a>
                <a class="dropdown-item d-flex align-items-center" href="#">
                  <div class="mr-3">
                    <div class="icon-circle bg-warning">
                      <i class="fas fa-exclamation-triangle text-white"></i>
                    </div>
                  </div>
                  <div>
                    <div class="small text-gray-500">December 2, 2019</div>
                    Spending Alert: Weve noticed unusually high spending for your account.
                  </div>
                </a>
                
              </div>
            </li>
          
            <div class="topbar-divider d-none d-sm-block"></div>
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">
                <img class="img-profile rounded-circle" src="img/boy.png" style="max-width: 60px">
                <span class="ml-2 d-none d-lg-inline text-white small">Maman Ketoprak</span>
              </a>
              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                <a class="dropdown-item" href="profile.php">
                  <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                  Profile
                </a>
                <a class="dropdown-item" href="https://telegram.dog/darshangangadhar">
                  <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                  Contact 
                </a>
                <a class="dropdown-item" href="https://telegram.dog/fastbackofficial">
                  <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                  Join Telegram 
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="logout.php" data-toggle="modal" data-target="#logoutModal">
                  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                  Logout
                </a>
              </div>
            </li>
          </ul>
        </nav>
        <!-- Topbar -->

        <!-- Container Fluid-->
        	
<div class="col-lg-12">
              <div class="card mb-4">
                <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-primary">Withdraw</h6>
                </div>
                <?= $error; ?>
                         
               <div style="border: 1px solid #000000; width: 18rem; border-radius: 3px; color: red; margin: auto; padding: 1.1rem;"> 
             <b >⚠️ Do Not Refresh This Page</b>
                
                </div>
                <div style="width: 20rem; margin: auto; padding: 1.1rem;">
                	<form method="POST">
                	<div class="form-group">
                      <textarea class="form-control" id="exampleInputPassword" row="6" placeholder="Seperate Paytm Numbers With Comma,
eg : 9999999999,9999999999" name="mob"  rows="4" required></textarea>
                      <br>
                      	<div class="form-group">
                      <input type="number" class="form-control" id="exampleInputPassword" placeholder="Enter Amount" name="amo" required>
                      </div>
                      <div class="form-group">
                      <input type="text" class="form-control" id="exampleInputPassword" placeholder="Enter Comment" name="com"  required>
                      </div>
                      <div class="form-group">
                      <button type="submit" class="btn btn-primary btn-block" name="submit">Pay</button>
                    </div>
                      </form>
                </div>
                                </div>
                                                </div>
            
      <!-- Footer -->
      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
          </div>
        </div>

        <div class="container my-auto py-2">
          <div class="copyright text-center my-auto">
            <span>copyright &copy; <script> document.write(new Date().getFullYear()); </script> - Fast Back
              
            </span>
          </div>
        </div>
      </footer>
      <!-- Footer -->
    </div>
  </div>

  <!-- Scroll to top -->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
  <script src="js/ruang-admin.min.js"></script>
  <script src="vendor/chart.js/Chart.min.js"></script>
  <script src="js/demo/chart-area-demo.js"></script>  
</body>

</html>