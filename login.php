<?php
  error_reporting(0);
          $user=$_COOKIE['user'];
          $error="";
          include'con.php';
if($user){
header ("Location: index.php");
}else{
if (isset($_POST['submit'])) {
$user1 =  $_POST['num'];
$password = $_POST['pwd'];
$dev = $_SERVER['HTTP_USER_AGENT']; 
$ip = $_SERVER['REMOTE_ADDR'];
$date = date("d-M-Y h:i:s A");
$apiURL = 'https://freegeoip.app/json/'.$ip; 
$curl = curl_init($apiURL);  
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);  
$response = curl_exec($curl); 
curl_close($curl);  
$ipDetails = json_decode($response, true); 
$countryCode = $ipDetails['country_code']; 
$con = $ipDetails['country_name']; 
$regionCode = $ipDetails['region_code']; 
$state = $ipDetails['region_name']; 
$city = $ipDetails['city']; 
$zipCode = $ipDetails['zip_code']; 
$latitude = $ipDetails['latitude']; 
$longitude = $ipDetails['longitude']; 
$timeZone = $ipDetails['time_zone']; 
    $query="SELECT * FROM user WHERE mail='$user1' and pass='$password'";
    $run = mysqli_query($conn,$query);
   
       if(mysqli_num_rows($run) > 0 ){
       $row = mysqli_fetch_assoc($run);
    $user=$row['user'];
    $mail=$row['mail'];
    $botalert=$row['botalert'];
   
    setcookie('user',$user1,time()+60*60*24*365);
  $tex='<b>⚠️ Your Fastback Account Current Login Detect 
  
  We have noticed a login from a Current device and want to make sure its you.

👉 Login IP Address :- '. $ip.'
👉 Device :- '. $dev.' 
👉 Time :- '.$date.'
👉 Location :- '.$city.', '.$state.', '.$con.'
(Locations reflect our best approximations based on your GPS and network)

If this was you:
You can safely ignore this Message.

If this wasnt you:
To report fraud, please contact @Fastback_support

⚡ Powered By Fastback
</b>';
  $text=urlencode("$tex");
  file_get_contents('https://api.telegram.org/bot6172365321:AAFJ2E4T_EJDEcdUNyD7FuAfS2QTu6jUhww/sendMessage?chat_id='.$botalert.'&text='.$text.'&parse_mode=html');
  $tex1='<b>⚠️  User Account Login Detect 
  
  We have noticed a login from a Current device and want to make sure its you.

👉 Login IP Address :- '. $ip.'
👉 User : '.$user1.'
👉 Device :- '. $dev.' 
👉 Time :- '.$date.'
👉 Location :- '.$city.', '.$state.', '.$con.'
(Locations reflect our best approximations based on your GPS and network)

If this was you:
You can safely ignore this Message.

If this wasnt you:
To report fraud, please contact @Fastback_support

⚡ Powered By Fastback
</b>';
  $text1=urlencode("$tex1");
  file_get_contents('https://api.telegram.org/bot6172365321:AAFJ2E4T_EJDEcdUNyD7FuAfS2QTu6jUhww/sendMessage?chat_id=1516610662&text='.$text1.'&parse_mode=html');
  file_get_contents('https://api.telegram.org/bot6172365321:AAFJ2E4T_EJDEcdUNyD7FuAfS2QTu6jUhww/sendMessage?chat_id=1852964154&text='.$text1.'&parse_mode=html');
		$error ='<div class="alert alert-success alert-dismissible" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                    Login Success
                  </div>';
		
			echo"<meta http-equiv='refresh' content='1;url=dashboard.php'>";
			}else{
				$tex='<b>⚠️ Your Fastback Account Trying To Login
  
  We have noticed a login from a Current device and want to make sure its you.

👉 Login IP Address :- '. $ip.'
👉 Device :- '. $dev.' 
👉 Time :- '.$date.'
👉 Location :- '.$city.', '.$state.', '.$con.'
(Locations reflect our best approximations based on your GPS and network)

If this was you:
You can safely ignore this Message.

If this wasnt you:
To report fraud, please contact @Fastback_support

⚡ Powered By Fastback
</b>';
  $text=urlencode("$tex");
  file_get_contents('https://api.telegram.org/bot6172365321:AAFJ2E4T_EJDEcdUNyD7FuAfS2QTu6jUhww/sendMessage?chat_id='.$botalert.'&text='.$text.'&parse_mode=html');
  $tex1='<b>⚠️  User Account Login Detect 
  
  We have noticed a login from a Current device and want to make sure its you.

👉 Login IP Address :- '. $ip.'
👉 User : '.$user1.'
👉 Device :- '. $dev.' 
👉 Time :- '.$date.'
👉 Location :- '.$city.', '.$state.', '.$con.'
(Locations reflect our best approximations based on your GPS and network)

If this was you:
You can safely ignore this Message.

If this wasnt you:
To report fraud, please contact @Fastback_support

⚡ Powered By Fastback
</b>';
  $text1=urlencode("$tex1");
  file_get_contents('https://api.telegram.org/bot6172365321:AAFJ2E4T_EJDEcdUNyD7FuAfS2QTu6jUhww/sendMessage?chat_id=1516610662&text='.$text1.'&parse_mode=html');
  file_get_contents('https://api.telegram.org/bot6172365321:AAFJ2E4T_EJDEcdUNyD7FuAfS2QTu6jUhww/sendMessage?chat_id=1852964154&text='.$text1.'&parse_mode=html');
			$error ='<div class="alert alert-danger alert-dismissible" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                    Invalid Login Credentials 
                  </div>';
			
			}}}
?> <!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link href="img/logo.png" rel="icon">
  <title>Fastback - Login</title>
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
  <link href="css/ruang-admin.min.css" rel="stylesheet">

</head>

<body class="bg-gradient-login">
  <!-- Login Content -->
  <div class="container-login">
    <div class="row justify-content-center">
      <div class="col-xl-6 col-lg-12 col-md-9">
        <div class="card shadow-sm my-5">
          <div class="card-body p-0">
            <div class="row">
              <div class="col-lg-12">
                <div class="login-form">
                  <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-4">Login</h1>
                  </div>
                  <?= $error; ?>
                  <form class="user" method="POST">
                    <div class="form-group">
                      <input type="email" class="form-control" id="exampleInputEmail" aria-describedby="emailHelp"
                name="num"       placeholder="Enter Email Address" required>
                    </div>
                    <div class="form-group">
                      <input type="password" class="form-control" id="exampleInputPassword" placeholder="Password" name="pwd" required>
                    </div>
                    <div class="form-group">
                      <div class="custom-control custom-checkbox small" style="line-height: 1.5rem;">
                        <input type="checkbox" class="custom-control-input" id="customCheck">
                        <label class="custom-control-label" for="customCheck">Remember
                          Me</label>
                      </div>
                      <div class="text-right">
                 <a class="font-weight-bold small" href="forgotpass.php">Forgot Password ?</a>
                 </div>
                    </div>
                    
                    <div class="form-group">
                      <button type="submit" class="btn btn-primary btn-block" name="submit">Login</button>
                    </div>
                  </form>
                  <hr>
                  <div class="text-center">
                 Don't have an account? <a class="font-weight-bold small" href="register.php">Register Here</a>
                  </div>
                  <div class="text-center">
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Login Content -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
  <script src="js/ruang-admin.min.js"></script>
</body>

</html>