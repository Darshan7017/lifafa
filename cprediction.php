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
 $user=$_COOKIE["user"];
$error="";
$records1 = mysqli_query($conn,"select * from user where mail='$user'"); 
$data1   = $records1->fetch_assoc();
$bid= $data1['botalert'];
$bal = $data1['bal'];
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
  <link href="img/logo.png" rel="icon">
  <title>Fastback - Color Prediction</title>
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
  <link href="css/ruang-admin.min.css" rel="stylesheet">
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
        
<div class="col-lg-12">
              <div class="card mb-4">
                <div class="card-body">
                  <div class="row nogutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-uppercase mb-1">Balance</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800" id="bal">₹<?php echo $bal; ?></div>
                   
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
                         
             <button type="button" class="btn btn-info mb-1 bg-gradient-success green" id="jgreen">Join Green</button>
    <button type="button" class="btn btn-info mb-1 bg-gradient-primary voilet" id="jvoilet" >Join Voilet</button>
                  <button type="button" class="btn btn-dark mb-1 bg-gradient-danger red" 6
id="jred" >Join Red</button>
                  
                  <div class="card-body">
                  <button type="button" class="btn btn-dark mb-1 bg-gradient-primary" style="color: #ffffff; border: none; margin: auto; background: #ff3232;
background: -moz-linear-gradient(-45deg, #ff3232 0%, #ff3030 50%, #282fff 51%, #005dff 100%);
background: -webkit-linear-gradient(-45deg, #ff3232 0%,#ff3030 50%,#282fff 51%,#005dff 100%);
background: linear-gradient(135deg, #ff3232 0%,#ff3030 50%,#282fff 51%,#005dff 100%);
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#ff3232', endColorstr='#005dff',GradientType=1 );
" id="j0">0</button>
                  
                  <button type="button" class="btn btn-dark mb-1 bg-gradient-success" style="color: #ffffff; border: none; margin-right: 1rem; margin-left: 1rem;" id="j1">1</button>
                  
                  <button type="button" class="btn btn-dark mb-1 bg-gradient-danger" style="color: #ffffff; border: none; margin-right: 1rem; " id="j2">2</button>
              <button type="button" class="btn btn-dark mb-1 bg-gradient-success" style="color: #ffffff; border: none; margin-right: 1rem; " id="j3">3</button>
              <button type="button" class="btn btn-dark mb-1 bg-gradient-danger" style="color: #ffffff; border: none; " id="j4">4</button>
              </div>
              
              <button type="button" class="btn btn-dark mb-1 bg-gradient-danger" style="color: #ffffff; border: none; margin-right: 1rem; margin-left: 1rem;
background: #32CD32;
background: -moz-linear-gradient(-45deg, #7CFC00 0%, #008000 50%,#282fff 51%,#005dff 100%);
background: -webkit-linear-gradient(-45deg, #7CFC00 0%,#008000 50%,#282fff 51%,#005dff 100%);
background: linear-gradient(135deg, #7CFC00 0%,#008000 50%,#282fff 51%,#005dff 100%);
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#32CD32', endColorstr='#005dff',GradientType=1 " id="j5">5</button>
              <button type="button" class="btn btn-dark mb-1 bg-gradient-danger" style="color: #ffffff; border: none; margin-right: 1rem;" id="j6">6</button>
              <button type="button" class="btn btn-dark mb-1 bg-gradient-success" style="color: #ffffff; border: none; margin-right: 1rem;" id="j7">7</button>
              <button type="button" class="btn btn-dark mb-1 bg-gradient-danger" style="color: #ffffff; border: none; margin-right: 1rem;" id="j8">8</button>
              <button type="button" class="btn btn-dark mb-1 bg-gradient-success" style="color: #ffffff; border: none; margin-right: 1rem " id="j9">9</button>
              
              
              <span id="datat"></span>
                  <div class="card-body">
                </div></div>     
                <div class="modal fade" id="payment" tabindex="-1" role="dialog"
            aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="titleofcard">Join Green</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
           <div id="betform"></div>
           </div>
                </center>
                <div class="modal-footer">
                  <button type="button" class="btn btn-outline-primary" data-dismiss="modal">Close</button>
                  <button type="button" class="btn btn-primary mb-1" id="paybtm">Place Bet</button></form>
                </div>
              </div>
            </div>
          </div>
          
                      <div class="modal fade" id="alert" tabindex="-1" role="dialog"
            aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
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
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
  <script src="js/ruang-admin.min.js"></script>
  <script src="vendor/chart.js/Chart.min.js"></script>
  <script src="js/demo/chart-area-demo.js"></script>  
  <script>

$(document).ready(function () {
var x = setInterval(function() { 
start_count_down(); 
  $('#closbtnloader').click(); 
}, 1e3);
});
function start_count_down() { 
$.ajax({url: "ajax.php", success: function(result){
    $("#bal").html(result);
  }});
     $.ajax({type: "POST", url: "gameid.php", success: function(result){
    $("#gameid").html(result);
    document.getElementById("gid").setAttribute("value", result);
  }});
  $.ajax({type: "POST", url: "myorder.php", success: function(table){
    $("#table").html(table);
  }});
  
  $.ajax({type: "POST", url: "bets.php", success: function(table){
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
if(distance<=5)
{
$(".mb-1").prop('disabled', true);
}else{ 
$(".mb-1").prop('disabled', false);
	}
	if(distance == 60 || distance == 59 || distance == 58 || distance == 57 || distance == 56 || distance == 55){
		document.getElementById("next").innerHTML = "<span class='timer'>00</span>" + "<span>:</span>" +"<span class='timer'>00</span>";
		$(".mb-1").prop('disabled', true);
		$.ajax({type: "POST", data : { button : '5'}, url: "wl.php", success: function(result){
			var wo = JSON.parse(result);
			if(wo.amo){
				$("#wl").html(wo.status);
    $('#wlm').modal('show');
    }
  }});
	}
}
   $(document).ready(function () { 
            $("#jgreen").click(function () { 
   $.ajax({type: "POST", data : { button : 'Green'}, url: "betform.php", success: function(result){
    $("#betform").html(result);
    $("#titleofcard").html("Join Green");
    $('#payment').modal('show');
  }});
            }); 
            $("#jvoilet").click(function () { 
   $.ajax({type: "POST", data : { button : 'Voilet'}, url: "betform.php", success: function(result){
    $("#betform").html(result);
    $("#titleofcard").html("Join Voilet");
    $('#payment').modal('show');
  }});
            }); 
            $("#jred").click(function () { 
   $.ajax({type: "POST", data : { button : 'Red'}, url: "betform.php", success: function(result){
    $("#betform").html(result);
    $("#titleofcard").html("Join Red");
    $('#payment').modal('show');
  }});
            }); 
            $("#j0").click(function () { 
   $.ajax({type: "POST", data : { button : '0'}, url: "betform.php", success: function(result){
    $("#betform").html(result);
    $("#titleofcard").html("Join Number 0");
    $('#payment').modal('show');
  }});
            }); 
            $("#j1").click(function () { 
   $.ajax({type: "POST", data : { button : '1'}, url: "betform.php", success: function(result){
    $("#betform").html(result);
    $("#titleofcard").html("Join Number 1");
    $('#payment').modal('show');
  }});
            }); 
            $("#j2").click(function () { 
   $.ajax({type: "POST", data : { button : '2'}, url: "betform.php", success: function(result){
    $("#betform").html(result);
    $("#titleofcard").html("Join Number 2");
    $('#payment').modal('show');
  }});
            }); 
            $("#j3").click(function () { 
   $.ajax({type: "POST", data : { button : '3'}, url: "betform.php", success: function(result){
    $("#betform").html(result);
    $("#titleofcard").html("Join Number 3");
    $('#payment').modal('show');
  }});
            }); 
            $("#j4").click(function () { 
   $.ajax({type: "POST", data : { button : '4'}, url: "betform.php", success: function(result){
    $("#betform").html(result);
    $("#titleofcard").html("Join Number 4");
    $('#payment').modal('show');
  }});
            }); 
            $("#j5").click(function () { 
   $.ajax({type: "POST", data : { button : '5'}, url: "betform.php", success: function(result){
    $("#betform").html(result);
    $("#titleofcard").html("Join Number 5");
    $('#payment').modal('show');
  }});
            }); 
            $("#j6").click(function () { 
   $.ajax({type: "POST", data : { button : '6'}, url: "betform.php", success: function(result){
    $("#betform").html(result);
    $("#titleofcard").html("Join Number 6");
    $('#payment').modal('show');
  }});
            }); 
            $("#j7").click(function () { 
   $.ajax({type: "POST", data : { button : '7'}, url: "betform.php", success: function(result){
    $("#betform").html(result);
    $("#titleofcard").html("Join Number 7");
    $('#payment').modal('show');
  }});
            }); 
            $("#j8").click(function () { 
   $.ajax({type: "POST", data : { button : '8'}, url: "betform.php", success: function(result){
    $("#betform").html(result);
    $("#titleofcard").html("Join Number 8");
    $('#payment').modal('show');
  }});
            }); 
            $("#j9").click(function () { 
   $.ajax({type: "POST", data : { button : '9'}, url: "betform.php", success: function(result){
    $("#betform").html(result);
    $("#titleofcard").html("Join Number 9");
    $('#payment').modal('show');
  }});
            }); 
                  $("#paybtm").click(function () { 
    var amo = $("#betamount").val(); 
    var button = $("#button").val(); 
    var gameid = $("#gid").val(); 
    $.ajax({type: "POST", data : { amo : amo, button : button, gameid : gameid}, url: "betdata.php", success: function(result){
    $('#payment').modal('hide');
    $("#betmess").html(result);
    $('#alert').modal('show');
   }});
            }); 
       
        }); 
</script>
</body>

</html>