       
<DOCTYPE html>
  <html>
  <head>  
 <!---- php Made By Mr Dark (@Darshan701)------>
  	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  
  	<style>
@import url('https://fonts.googleapis.com/css2?family=Roboto+Mono:ital@1&display=swap');
  	*{
   padding: 0px;
   margin: 0px;
   box-sizing: border-box;   
   outline: none;
   border: none;
}
:root{
   input-bg: ;
         }
html{
   background: ;
}
body{  
   text-align: center; 
 /*  background-image: linear-gradient(to left, #EF4DFF,#16F0FF); */
   display: grid;
   place-items: center;   
}
div.main{
   background: white;  
   padding: 10px 10px;
   border-radius: 5px;
   box-shadow: .1px 0.1px 10px #E4E4E4;
}
div.input_group{
 /* border: 0.5px solid #F364FF; */
 box-shadow: .1px 0.1px 10px #E4E4E4;
  width: 290px;
  display: flex;
  margin: 10px 15px;     
  border-radius: 5px;
}
select{
   height: 50px;
   width: 100%;
   padding: 10px 10px;
   color: #898989;
   font-size: 15px;
   font-weight: ;
   border-radius: 0px 5px 5px 0px;  
   border-left: none;
   outline: none;      
   background-color: #fff;
   text-align: center;
}
.input{
   height: 50px;
   width: 100%;
   padding: 1px 10px;
   color: #898989;
   font-size: 15px;
   font-weight: ;
   border-radius: 0px 5px 5px 0px;  
   border-left: none;
   outline: none;      
}
.input::placeholder{
   color: #898989;
}
div.input_group i{
   background: #ffffff;
   height: 50px;
   color: #aaa;
   width: 40px;
   border-radius: 5px 0px 0px 5px;
   padding: 15px 0px;  
   border-right: none;
}
.bx{
 font-size: 25px;
 color: grey;
}
h3.h3{
   text-transform: uppercase;
   color: #fff;
   margin: 20px 0px;
   font-size: 18px;
    -webkit-text-stroke-width: 0.5px;   
    -webkit-text-stroke-color:white; 
border: 1px solid black;
border-radius: 5px;  
padding: 6px.3px;
margin: 0px 15px;
margin-bottom: 15px;
background: #60E1FF;
}
.submit{
   height: 45px;
   font-size: 15px;
   width: 290px;
   color: white;
   background-image: linear-gradient(to left, #32CEFF,#FF6CF9);
   border-radius: 5px 5px 5px 5px;  
   font-weight: 600; 
   outline: 0px;
   text-transform: uppercase;
 /*  border: 1px solid #32CEFF;*/
}
button.btn{
   width: 120px;
   background-image: linear-gradient(to top, #B08200,#FFBF0A);
   border: none;
   height: 40px;
   padding:10px;
   color: white;
   font-weight: 550;
   font-size: 16px;
   border-radius: 5px;
   margin: 15px 19px;
}
hr{
   height: 1px;
   width: 290px;
   margin-left: 15px;
   background-image: linear-gradient(to right, #DB6EFF,#60BFFF);
   text-align: center;
}
</style>
  <meta name = "theme-color" content = "#000">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
 <!----===== Boxicons CSS ===== -->
    <link href="https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css" rel="stylesheet">
  <title>Login</title>  
  
    </head>
    <body>
       <div class="main">
     <form action="" method="POST" autocomplete="off">

   <img alt="logo" style="margin: 15px 0px; height: 100px; width: 100px; border-radius: 100%; border: 1px solid black;" src="logo00.jpg"/>
     <h3 class="h3">Login</h3>
       

     <div class="input_group">
      <i style="padding-left: 5px; margin-right: 2px;" class="bx bxs-user"></i>
      <input type="text" id="paytm" name="username" placeholder="Username" class="input" style="border-radius: 0px 0px 0px 0px; border-right: none; background: white;"required> 
     </div>   
     
     <div class="input_group">
      <i class="fa fa-lock" style="font-size:24px; margin-left: 5px;"></i>
      <input type="password"  name="password" placeholder="Password" class="input" required>           
     </div>
              
             <button type="submit" class="submit" name="submit"><i class=""></i>Login</button>
            
             </form>
        <div style="display: flex;">
       <button type="button" class="btn" onclick="func()" style="display: flex; text-align: center;"><i  style="color: white; margin: none; padding: 0px 5px; font-size: 18px;" class="bx bx-reset"></i> Forgot ?</button>
  
        <button type="button" class="btn" onclick="invite()" style="display: flex; text-align: center;"><i  style="color: white; margin: none; padding: 0px 5px; font-size: 18px;" class="fa fa-user-plus"></i>Register</button>
        </div>
               </div>               </body>
         
<?php
$user = $_COOKIE['user'];
if($user){
	header ("Location: index.php");
	}
	if(!isset($_POST['submit'])){
      echo '<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="js/loginfirst.js"></script>';
     }
      if (isset($_POST['submit'])) {
include'con.php';
	$user = $_POST['username'];
	$pass = $_POST['password'];
	$ip=$_SERVER['REMOTE_ADDR'];
	$password=md5($pass);
	$records = mysqli_query($conn,"select * from        user where user='$user'"); 
    $data   = $records->fetch_assoc();
    $stat = $data['stat'];
    $dpass = $data['password'];
    $ban = "Ban";
    $act ="Active";
    if($stat == $ban){
    $error = '<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="js/banned.js"></script>';
    	} else {
    	$query="SELECT * FROM user WHERE user='$user' and stat='$act' and password='$password'";
    $run = mysqli_query($conn,$query);
   
       if(mysqli_num_rows($run) > 0 ){
       $row = mysqli_fetch_assoc($run);
    $user=$row['user'];
    echo"<meta http-equiv='refresh' content='1;url=index.php'>";    
	echo '<script>
		function setCookie()  
    {  
		document.cookie = "user=user; expires=Thu, 18 Dec 2040 12:00:00 UTC";
		}
		
</script>';
	$error = '<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="js/logins.js"></script>';
	} else {
		$error ='<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="js/wrongpass.js"></script>';
		}
		echo "$error";
}}
?> 
            
<script>
      if ( window.history.replaceState ) {
        window.history.replaceState( null, null, window.location.href );
    } 
    
    function func(){    window.location.href="forgot.php";
    }
    
    function invite(){    window.location.href="register.php";
    }
         
        </script>     
        </html>