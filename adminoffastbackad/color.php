<?php
include 'con.php';
 session_start();
$deadl =  strtotime(date("Y-m-d H:i:s"));
 function call($url){
  $curl = curl_init($url);
  curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
  curl_setopt($curl, CURLOPT_POST, false);
  curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
  $curl_response = curl_exec($curl);
  curl_close($curl);
  return $curl_response;
}
 $user=$_COOKIE["admin"];
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

 
 ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
<link href="../img/logo.png" rel="icon">
  <title>Fastback - Color</title>
  <link href="../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
  <link href="../css/ruang-admin.min.css" rel="stylesheet">
  
  <style>
  	.base-timer {
  position: relative;
  width: 3.5rem;
  height: auto;
  margin-left: 14rem;
}

.base-timer__svg {
  transform: scaleX(-1);
}
.base-timer__circle {
  fill: none;
  stroke: none;
}

.base-timer__path-elapsed {
  stroke-width: 7px;
  stroke: grey;
}

.base-timer__path-remaining {
  stroke-width: 7px;
  stroke-linecap: round;
  transform: rotate(90deg);
  transform-origin: center;
  transition: 1s linear all;
  fill-rule: nonzero;
  stroke: currentColor;
}

.base-timer__path-remaining.green {
  color: rgb(65, 184, 131);
}

.base-timer__path-remaining.orange {
  color: orange;
}

.base-timer__path-remaining.red {
  color: red;
}

.base-timer__label {
  position: absolute;
  width: 3.5rem;
  height: auto;
  top: 0;
  display: flex;
  align-items: center;
  justify-content: center;
  font-size: 1rem;
  margin-top: 1rem;
}
.green{
	color: #ffffff; border: none;margin: auto;
	}
	.voilet{
		color: #ffffff; border: none; margin: auto;
		}
		.red{
			color: #ffffff; border: none; margin: auto; width: 6rem;
			}
	@media screen and (min-width: 360px & ) {
  .record {
    max-width: 20rem;
  }
}
</style>
</head>

<body id="page-top">
	<div id="wrapper">
  <?php include("nav.php");?>
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
        
<div class="col-lg-12">
              <div class="card mb-4">
                <div class="card-body">
                  <div class="row nogutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-uppercase mb-1">All User Balance</div>
                                 <?php
$sql = "SELECT * FROM user";
$res = mysqli_query($conn,$sql);
while ($row = mysqli_fetch_assoc($res)){
$amoo = $row['bal'];  
$amo = $amo+$amoo;
}
?>
                      <div class="h5 mb-0 font-weight-bold text-gray-800" id="bal">₹<?= $amo; ?></div>
                   
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-rupee-sign fa-2x text-success"></i>
                    </div>
                  </div>
                </div>
              </div>
              	
              <div class="card mb-4">
                <center>
                	<input type="hidden" id="gid" value="hi">
                	<div class="bg-gradient-secondary" style=" padding: 0.5rem; border-radius: 0.5rem;  color: #ffffff; display: inline; position: relative; top: 2.5rem; right: 5rem;">
                	Game Id : <span id="gameid"></span>
                	</div>
                	<div class="base-timer" >
  <svg class="base-timer__svg" viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg">
    <g class="base-timer__circle">
      <circle class="base-timer__path-elapsed" cx="50" cy="50" r="45"></circle>
      <path
        id="base-timer-path-remaining"
        stroke-dasharray="283"
        class="base-timer__path-remaining ${remainingPathColor}"
        d="
          M 50, 50
          m -45, 0
          a 45,45 0 1,0 90,0
          a 45,45 0 1,0 -90,0
        "
      ></path>
    </g>
  </svg>
  <span id="base-timer-label" class="base-timer__label"><div id="next"></div></span>
</div><br style="margin-bottom: 0.5rem;">
                         
              
              <div class="card-body">
              	<form method="POST">
                               <div class="form-group">
                    <select class="select2-single form-control" name="lifafa" id="result" required>
                      <option  value="" hidden>Select Result Type</option>
            <option value="auto">Auto</option>
                <option value="manual">Manual</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <select class="select2-single form-control" name="lifafa" id="rnum" required>
                      <option  value="" hidden>Select Result Number</option>
            <option value="0">0</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                    <option value="7">7</option>
                    <option value="8">8</option>
                    <option value="9">9</option>
                    </select>
                  </div>
                  </div>
                  <div style="border: 1px solid #000000; width: 18rem; border-radius: 3px; color: red; margin: auto; padding: 1.1rem;"> 
             <b > If You Want To Go Back Please Select Auto Then Go Back</b>
                
                </div>
              <span id="datat"></span>
                  <div class="card-body">
                </div></div>     
          
          
          
                      <div class="modal fade" id="alert" tabindex="-1" role="dialog"
            aria-labelledby="exampleModalCenterTitle" aria-hidden="true" class="card-body">
            <div class="modal-dialog modal-dialog-centered" role="document">
              <div class="modal-content">
                <div class="modal-body" style="margin: auto">
           <div id="betmess"></div>
           </div>
                
                <div class="modal-footer">
                  <p type="button"  data-dismiss="modal" style="margin: auto">Ok</p>
               </form>
               </center>
                </div>
              </div>
            </div>
          </div>
          
                      

                <span id="bets"></span>
                	
</center>
                
                <span id="table"></span>
          <div class="modal fade" id="wlm" tabindex="-1" role="dialog"
            aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
              <div class="modal-content">
              	<center><div id="wl"></div></center>
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
    </div>
  </div>

  <!-- Scroll to top -->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>
  <script src="../vendor/jquery/jquery.min.js"></script>
  <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="../vendor/jquery-easing/jquery.easing.min.js"></script>
  <script src="../js/ruang-admin.min.js"></script>
  <script src="../vendor/chart.js/Chart.min.js"></script>
  <script src="../js/demo/chart-area-demo.js"></script>  
  <script>

$(document).ready(function () {
var x = setInterval(function() { 
start_count_down(); 
  $('#closbtnloader').click(); 
}, 1e3);
});
function start_count_down() { 
     $.ajax({type: "POST", url: "../gameid.php", success: function(result){
    $("#gameid").html(result);
    document.getElementById("gid").setAttribute("value", result);
  }});
  
  $.ajax({type: "POST", url: "../bets.php", success: function(table){
    $("#bets").html(table);
  }});
  
  
var countDownDate = Date.parse(new Date) / 1e3;
  var now = new Date().getTime();
  var distance = 60 - countDownDate % 60;
  //alert(distance);
  var i = distance / 60,
   n = distance % 60,
   o = n / 10,
   s = n % 10;
  var minutes = Math.floor(i);
  var seconds = ('0'+Math.floor(n)).slice(-2);
  document.getElementById("next").innerHTML = "<span class='timer'>0"+Math.floor(minutes)+"</span>" + "<span>:</span>" +"<span class='timer'>"+seconds+"</span>";
	
}
   $('#result').on('change', function() {
  if(this.value == "auto"){
    $.ajax({type: "POST", data : { result : 'auto'}, url: "ourc.php", success: function(result){
    $("#betmess").html(result);
    $('#alert').modal('show');
  }});
  } else if(this.value == "manual"){
  $.ajax({type: "POST", data : { result : 'manual'}, url: "ourc.php", success: function(result){
    $("#betmess").html(result);
    $('#alert').modal('show');
  }});
  } 
});
   
     $('#rnum').on('change', function() {
     	var val = $('#rnum option:selected').val();
    $.ajax({type: "POST", data : { num : val}, url: "ourc.php", success: function(result){
    $("#betmess").html(result);
    $('#alert').modal('show');
  }});
});
   
</script>
</body>

</html>