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
$ip=$_SERVER['REMOTE_ADDR'];
    $query="SELECT * FROM user WHERE mail='$user1' and pass='$password'";
    $run = mysqli_query($conn,$query);
   
       if(mysqli_num_rows($run) > 0 ){
       $row = mysqli_fetch_assoc($run);
    $user=$row['user'];
    $mail=$row['mail'];
    $botalert=$row['botalert'];
   
    setcookie('user',$user1,time()+60*60*24*365);
  
		$error ='<div class="alert alert-success alert-dismissible" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                    Login Success
                  </div>';
		
			echo"<meta http-equiv='refresh' content='1;url=index.php'>";
			}else{
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
  <title>Fastback - Forgot Password</title>
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
                    <h1 class="h4 text-gray-900 mb-4">Password Reset</h1>
                  </div>
                  <?= $error; ?>
                  <form class="user" method="POST">
                    <div class="form-group">
                      <input type="email" class="form-control" id="exampleInputEmail" aria-describedby="emailHelp"
                name="num"       placeholder="Enter Email Address" required>
                    </div>
                     <div class="form-group">             
                    <div class="input-group" id="clockPicker3">
                      <input class="form-control" placeholder="Enter OTP" required>                     
                      <div class="input-group-append">
                        <button class="btn btn-primary" id="getotp" type="button">Get OTP</button>
                      </div>                      
                    </div>
                  </div>
                    <div class="form-group">
                      <input type="password" class="form-control" id="exampleInputPassword" placeholder="Enter New Password" name="pwd" required>
                    </div>   
                    <div class="form-group">
                      <button type="submit" class="btn btn-primary btn-block" name="submit">Reset Password</button>
                    </div>
                  </form>
                  <hr>
                  <div class="text-center">
                 Got Password ? <a class="font-weight-bold small" href="login.php">Login Here</a>
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