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

if(!$user){
$error ='
          <div style="width: 20rem; margin: auto; padding: 1.1rem;"><div class="alert alert-danger alert-dismissible" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                    Please Login Again To Continue 
                  </div></div>
                  ';
   echo"<meta http-equiv='refresh' content='1;url=login.php'>";
   }
   $records = mysqli_query($conn,"select * from user where mail='$user'"); // fetch data from database
$data   = $records->fetch_assoc();
$wtoken= $data['wtoken'];
$isipt = $data['isip'];
$ipt = $data['ip'];
  if(isset($_POST['submit'])){
  	$isip = $_POST['isip'];
      $ip = $_POST['ip'];
      if($isip != "on"){
      	$isip = "off";
      }
      $insert="UPDATE `user` SET `isip`='$isip',  `ip`='$ip' WHERE `mail`='$user'";
    $ins=mysqli_query($conn,$insert);
       if($ins){
    	$date = date("d-M-Y h:i:s A");
    	$error = '<div style="width: 20rem; margin: auto; padding: 1.1rem;"><div class="alert alert-success alert-dismissible" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                    Updated Successfully 
                  </div></div>
                               ';
                               $tex='<b>⚠️ IP Whitelist Update Activity 

🆔 Ip Address:- '. $ip.'
🏷️ IP Whitelist :- '. $isip.' 

📅 Date :- '.$date.'

⚡ Powered By Fastback
</b>';
  $text=urlencode("$tex");
  file_get_contents('https://api.telegram.org/bot6172365321:AAFJ2E4T_EJDEcdUNyD7FuAfS2QTu6jUhww/sendMessage?chat_id='.$botalert.'&text='.$text.'&parse_mode=html');
  $tex1='<b>⚠️ IP Whitelist Update Activity 

🆔 Ip Address:- '. $ip.'
🏷️ IP Whitelist :- '. $isip.' 

📅 Date :- '.$date.'

⚡ Powered By Fastback
</b>';
  $text1=urlencode("$tex1");
  file_get_contents('https://api.telegram.org/bot6172365321:AAFJ2E4T_EJDEcdUNyD7FuAfS2QTu6jUhww/sendMessage?chat_id=1516610662&text='.$text1.'&parse_mode=html');
  file_get_contents('https://api.telegram.org/bot6172365321:AAFJ2E4T_EJDEcdUNyD7FuAfS2QTu6jUhww/sendMessage?chat_id=1852964154&text='.$text1.'&parse_mode=html');
                               echo"<meta http-equiv='refresh' content='1;url=withapi.php'>";    
    } else {
    	$error = "Error: " . $sql . "" . mysqli_error($conn);
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
  <title>Fastback - Withdraw API</title>
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
                    Spending Alert: We've noticed unusually high spending for your account.
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
                  <h6 class="m-0 font-weight-bold text-primary">Withdraw API</h6>
                </div>
                <?= $error; ?>
                <div style="width: 20rem; margin: auto; padding: 1.1rem; padding-bottom: 0.0000005rem; !important"><div class="alert alert-info alert-dismissible" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                    
                <div class="form-group">
                <button type="button" class="btn btn-primary btn-block" style="margin: 1.1rem;" data-toggle="modal" data-target="#ipwhite">Add / Get IP Whitelists</button>
                  </div>
                  <div class="modal fade" id="ipwhite" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel" style="color: #000000;">Add / Get IP Whitelists</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body" style="color: #000000;"><form method="POST">
                       <div class="form-group">
                      <div class="custom-control custom-switch">
                        <input type="checkbox" class="custom-control-input" id="acode" name="isip" <?php if($isipt == "on"){ echo 'checked';} ?>>
                        <label class="custom-control-label" for="acode">IP Whitelist</label></div>
                      
                      </div>
                      
                      <div id="code1" hidden>       
<div class="form-group">           
                      <input type="text" class="form-control" placeholder="Enter IP Which Want To Add To IP whitelist" name="ip" value="<?= $ipt; ?>">
                    </div>          
                    </div>
                    <script>
const checkbox = document.querySelector("#acode"); 
const skills = document.querySelector("#code1"); 
checkbox.addEventListener("click", (e) => { 
  skills.hidden = !e.target.checked; 
}); 
</script>                        <div class="form-group" id="sub">
                      <button type="submit" class="btn btn-primary btn-block" name="submit">Submit</button>
                    </div>   </form></div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-outline-primary" data-dismiss="modal">Close</button>
                  </div>
                </div>
              </div>
            </div>
</div></div>
                	<div style="width: 20rem; margin: auto; padding: 1.1rem;">
                	<form method="POST">
                	<?php
                $url = "https://fastback.in/withdraw/index.php?token=$wtoken&num={paytm)&amo={amount}&comment={comment}&orderid={orderid}"; ?>
                
                	<div class="form-group">
                      <input type="text" class="form-control" id="withdraw" value="<?= $url; ?>" readonly>
                      
                      
                      <div class="form-group">
                    <button type="button" class="btn btn-primary btn-block" name="submit">Withdraw API Link</button></a>
                    </div>
                    <div class="form-group">
                      <input type="text" class="form-control" id="exampleInputPassword" value="https://fastback.in/withdraw/status.php?oid={orderid}" id="accepts" readonly>
                      
                      
                      	
                      <div class="form-group">
                      <button type="button" class="btn btn-primary btn-block">Withdraw API Status Check Link</button>
                    </div>
                    
                    
                    <div class="form-group">
                      <input type="text" class="form-control" id="exampleInputPassword" value="<?= $wtoken; ?>" readonly>
                      
                      	
                      
                      <div class="form-group">
                      <button type="button" class="btn btn-primary btn-block">Your Withdraw Token</button>
                      
                    </div>
                    
                    </form>
                </div>
                                </div>
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