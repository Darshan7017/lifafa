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
   $records = mysqli_query($conn,"select * from user where mail='$user'"); 
$data   = $records->fetch_assoc();
$name = $data['user'];
$botalert= $data['botalert'];
$phone = $data['phone'];
$pass = $data['pass'];
$cha = $data['cha'];
$cha2 = $data['cha2'];
$cha3 = $data['cha3'];
$cha4 = $data['cha4'];
$cha5 = $data['cha5'];
$cha6 = $data['cha6'];
$cha7 = $data['cha7'];
$cha8 = $data['cha8'];
$cha9 = $data['cha9'];
$cha10 = $data['cha10'];
$cha11 = $data['cha11'];
$cha12 = $data['cha13'];
$cha13 = $data['cha14'];
$cha15 = $data['cha15'];
$cha16 = $data['cha16'];
$cha17 = $data['cha17'];
$cha18 = $data['cha18'];
$cha19 = $data['cha19'];
$cha20 = $data['cha20'];
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
  <title>Fastback - Create Lifafa</title>
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
  <link href="css/ruang-admin.min.css" rel="stylesheet">
  <style> 
</style>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
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
                  <h6 class="m-0 font-weight-bold text-primary">Edit Lifafa</h6>
                </div>
                <?= $error; ?>
                <?php
                $id = $_GET['id'];
                   $records = mysqli_query($conn,"select * from lifdata where user='$user' and id='$id'"); 
             
$data   = $records->fetch_assoc();
$title = $data['title'];
$link = $data['link'];
$cha = $data['cha'];
$code = $data['code'];
$cha2 = $data['cha2'];
$cha3 = $data['cha3'];
$cha4 = $data['cha4'];
$cha5 = $data['cha5'];
$cha6 = $data['cha6'];
$cha7 = $data['cha7'];
$cha8 = $data['cha8'];
$cha9 = $data['cha9'];
$cha10 = $data['cha10'];
$cha11 = $data['cha11'];
$cha12 = $data['cha13'];
$cha13 = $data['cha14'];
$cha15 = $data['cha15'];
$cha16 = $data['cha16'];
$cha17 = $data['cha17'];
$cha18 = $data['cha18'];
$cha19 = $data['cha19'];
$cha20 = $data['cha20'];
$isuname = $data['isuname'];
$iscode = $data['iscode'];
$type = $data['type'];
if(!$title){
 echo"<meta http-equiv='refresh' content='3;url=lifhistory.php'>";
$error = '<div style="width: 20rem; margin: auto; padding: 1.1rem;"><div class="alert alert-danger alert-dismissible" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                    Invalid Lifafa ID
                  </div></div>';
             }
             if(isset($_POST['submit'])){
             	$ltype = $_POST['lifafa'];
                $title=$_POST['title'];
                $iscode=$_POST['iscode'];
                $isuname=$_POST['isuname'];
                $link=$_POST['link'];
                $code=$_POST['code'];
                $cha=$_POST['cha'];
                $cha2=$_POST['cha2'];
                $cha3=$_POST['cha3'];
                $cha4=$_POST['cha4'];
                $cha5=$_POST['cha5'];
                $cha6=$_POST['cha6'];
                $cha7=$_POST['cha7'];
                $cha8=$_POST['cha8'];
                $cha9=$_POST['cha9'];
                $cha10=$_POST['cha10'];
                $cha11=$_POST['cha11'];
                $cha12=$_POST['cha12'];
                $cha13=$_POST['cha13'];
                $cha14=$_POST['cha14'];
                $cha15=$_POST['cha15'];
                $cha16=$_POST['cha16'];
                $cha17=$_POST['cha17'];
                $cha18=$_POST['cha18'];
                $cha19=$_POST['cha19'];
                $cha20=$_POST['cha20'];
                
              if($iscode != "on"){
              	$iscode = "off";
              }
              if($isuname != "on"){
              	$isuname = "off";
              }
            
            $insert="UPDATE `lifdata` SET `title`='$title', `iscode`='$iscode', `isuname`='$isuname', `link`='$link', `code`='$code', `cha`='$cha', `cha2`='$cha2', `cha3`='$cha3', `cha4`='$cha4', `cha5`='$cha5', `cha6`='$cha6', `cha7`='$cha7', `cha8`='$cha8', `cha9`='$cha9', `cha10`='$cha10', `cha11`='$cha11', `cha12`='$cha12', `cha13`='$cha13', `cha14`='$cha14', `cha15`='$cha15', `cha16`='$cha16', `cha17`='$cha17', `cha18`='$cha18',`cha19`='$cha19', `cha20`='$cha20' WHERE `user`='$user' and `id`='$id'";
    $ins=mysqli_query($conn,$insert);
    if($ins){
    	$error = '<div style="width: 20rem; margin: auto; padding: 1.1rem;"><div class="alert alert-success alert-dismissible" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                    Updated Successfully 
                  </div></div>
                               ';
                               echo"<meta http-equiv='refresh' content='1;url=lifhistory.php'>";    
    } else {
    	$error = "Error: " . $sql . "" . mysqli_error($conn);
    }
   }

                ?>
                	<?= $error; ?>
                	<div style="width: 20rem; margin: auto; padding: 1.1rem;">
              <form method="POST" >           
              	<div class="form-group">
                    
                    
       <div class="form-group">
                      <input type="text" class="form-control" value="Lifafa ID : <?= $id; ?>" readonly>
                      </div> 
                      <select class="select2-single form-control" name="lifafa" id="select2Single" required>
                      <option  value="" hidden>Select Lifafa Type</option>
            <option value="normal" <?php if($type == "normal"){ echo "selected"; } ?>>Normal Lifafa</option>
                <option value="toss" <?php if($type == "toss"){ echo "selected"; } ?>>Toss Lifafa</option>
               <option value="dice" <?php if($type == "dice"){ echo "selected"; } ?>>Dice Lifafa</option>
               <option value="scratch" <?php if($type == "scratch"){ echo "selected"; } ?> disabled>Scratch Lifafa (Soon)</option>
               <option value="spin" <?php if($type == "spin"){ echo "selected"; } ?> disabled>Spin Lifafa (Soon)</option>
                    </select>
                  </div>
                      <div class="form-group">
                      <input type="text" class="form-control" placeholder="Enter New Title Name" name="title" value="<?= $title; ?>" required>
                      </div>
                      <div class="form-group">
                      <input type="text" class="form-control" placeholder="Enter New Promotion Link" name="link" value="<?= $link; ?>" required>
                      </div>
                      
                      <div class="form-group">
                      <div class="custom-control custom-switch">
                        <input type="checkbox" class="custom-control-input" id="acode" name="iscode" <?php if($iscode == "on"){ echo "checked"; } ?>>
                        <label class="custom-control-label" for="acode">Access Code</label></div>
                      
                      </div>
                      <div id="code1" hidden>       
<div class="form-group">           
                      <input type="text" class="form-control" placeholder="Enter Access Code" name="code" value="<?= $code; ?>">
                    </div>          
                    </div>
                    <script>
const checkbox = document.querySelector("#acode"); 
const skills = document.querySelector("#code1"); 
checkbox.addEventListener("click", (e) => { 
  skills.hidden = !e.target.checked; 
}); 
</script>                           
 
                    <div class="form-group">
                      <div class="custom-control custom-switch">
                        <input type="checkbox" class="custom-control-input" id="adv" name="isuname" <?php if($isuname == "on"){ echo "checked"; } ?>>
                        <label class="custom-control-label" for="adv">Advance</label></div></div>
                   <div id="adv1" hidden>      
                   	<div class="form-group">        
<div class="bg-gradient-info" style="border: 1px solid #000000; width: 17.8rem; margin: auto; padding: 1.06rem; border-radius: 3px; color: #ffffff;"> 
             <b >   	<p>Enter Channel Username Without @. Ex:- if my channel username is @fastback i enter only fastback</p>  <div>   </div> </b>
                
                </div> </div>
  <div class="form-group">        
                      <input type="text" class="form-control" placeholder="Enter 1st Channel Username (main)" name="cha" value="<?= $cha; ?>">
                    </div>     
<div class="form-group">        
                      <input type="text" class="form-control" placeholder="Enter 2nd Channel Username (optional)" name="cha2" value="<?= $cha2; ?>">
                    </div>     
<div class="form-group">        
                      <input type="text" class="form-control" placeholder="Enter 3rd Channel Username (optional)" name="cha3" value="<?= $cha3; ?>">
                    </div>     <div class="form-group">        
                      <input type="text" class="form-control" placeholder="Enter 4th Channel Username (optional)" name="cha4" value="<?= $cha4; ?>">
                    </div>     <div class="form-group">        
                      <input type="text" class="form-control" placeholder="Enter 5th Channel Username (optional)" name="cha5" value="<?= $cha5; ?>">
                    </div>     <div class="form-group">        
                      <input type="text" class="form-control" placeholder="Enter 6th Channel Username (optional)" name="cha6" value="<?= $cha6; ?>">
                    </div>     <div class="form-group">        
                      <input type="text" class="form-control" placeholder="Enter 7th Channel Username (optional)" name="cha7" value="<?= $cha7; ?>">
                    </div>     <div class="form-group">        
                      <input type="text" class="form-control" placeholder="Enter 8th Channel Username (optional)" name="cha8" value="<?= $cha8; ?>">
                    </div>     <div class="form-group">        
                      <input type="text" class="form-control" placeholder="Enter 9th Channel Username (optional)" name="cha9" value="<?= $cha9; ?>">
                    </div>     <div class="form-group">        
                      <input type="text" class="form-control" placeholder="Enter 10th Channel Username (optional)" name="cha10" value="<?= $cha10; ?>">
                    </div>     <div class="form-group">        
                      <input type="text" class="form-control" placeholder="Enter 11th Channel Username (optional)" name="cha11" value="<?= $cha11; ?>">
                    </div>     <div class="form-group">        
                      <input type="text" class="form-control" placeholder="Enter 12th Channel Username (optional)" name="cha12" value="<?= $cha12; ?>">
                    </div>     <div class="form-group">        
                      <input type="text" class="form-control" placeholder="Enter 13th Channel Username (optional)" name="cha13" value="<?= $cha13; ?>">
                    </div>     <div class="form-group">        
                      <input type="text" class="form-control" placeholder="Enter 14th Channel Username (optional)" name="cha14" value="<?= $cha14; ?>">
                    </div>     <div class="form-group">        
                      <input type="text" class="form-control" placeholder="Enter 15th Channel Username (optional)" name="cha15" value="<?= $cha15; ?>">
                    </div>     <div class="form-group">        
                      <input type="text" class="form-control" placeholder="Enter 16th Channel Username (optional)" name="cha16" value="<?= $cha16; ?>">
                    </div>     <div class="form-group">        
                      <input type="text" class="form-control" placeholder="Enter 17h Channel Username (optional)" name="cha17" value="<?= $cha17; ?>">
                    </div>     <div class="form-group">        
                      <input type="text" class="form-control" placeholder="Enter 18th Channel Username (optional)" name="cha18" value="<?= $cha18; ?>">
                    </div>
<div class="form-group">        
                      <input type="text" class="form-control" placeholder="Enter 19th Channel Username (optional)" name="cha19" value="<?= $cha19; ?>">
                    </div>     <div class="form-group">        
                      <input type="text" class="form-control" placeholder="Enter 20th Channel Username (optional)" name="cha20" value="<?= $cha20; ?>">
                    </div>     
                    </div>
                    <script>
const checkbox1 = document.querySelector("#adv"); 
const skills1 = document.querySelector("#adv1"); 
checkbox1.addEventListener("click", (e) => { 
  skills1.hidden = !e.target.checked; 
}); 
</script>                              
                      <div class="form-group" id="sub">
                      <button type="submit" class="btn btn-primary btn-block" name="submit">Edit Lifafa</button>
                    </div>
                      </form>
                    </div>
                </div>
                                </div>
                                                </div>
                                                
  
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
        </div>
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Lifafa</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  <center><div id="lifafadata"></div></center>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-outline-primary" data-dismiss="modal">Close</button>
                  
                </div>
              </div>
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