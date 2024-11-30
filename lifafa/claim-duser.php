<!DOCTYPE html>
<html lang="en">
   <head>
      <meta http-equiv="Content-Type"content="text/html;charset=utf-8">
      <meta http-equiv="X-UA-Compatible"content="IE=edge">
      <meta name="viewport"content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=0" name="viewport"/>
      <link href="https://fonts.googleapis.com/css2?family=Public+Sans:wght@100;200;500;600;700&display=swap" rel="stylesheet">
      <link rel="stylesheet" href="assets/css/claim1.css" />
      <link rel="stylesheet" href="assets/css/claim.css" />
      <meta name="theme-color" content="#050a30">
      <title>Claim History</title>
   </head>
   <div class="col-md-6 col-lg-4 wms-tf-24 xtc main">
   <div class="row nav-top auto">
      <div class="col-12 xtl"><span class="nav-back wt" onclick="home()"></span>Claim History</div>
   </div>
   <div class="row bgnrdt pb-4">
      <div class="col-12"><img src="assets/images/lifBg.png"></div>
   </div>
   <div class="row airfrm pb-4">
   <div class="col-12 pt-4">
       
       <?php
$id=$_GET['id'];
include "con.php"; // Using database connection file here

$records1 = mysqli_query($conn,"select * from dlifdata where id='$id'"); // fetch data from database

while($data1 = mysqli_fetch_array($records1))


{
?>   
  <div class="table"> 
   <div class="table-cell"> 
    
        
<?php
$id=$_GET['id'];
include "con.php"; // Using database connection file here

$records = mysqli_query($conn,"select * from claim where id='$id'"); // fetch data from database

while($data = mysqli_fetch_array($records))


{
?>   

<?php
$num=$data['num'];  

$result = substr($num, 0, 5);
$result .= "XXXXX";

?>

 <div class="row mr-0 mar-b10 pb-2 tfcrd godbg">
      <div class="col-6 xtl pl-0"><span class="rcscpv tfs-w bggry">Success</span></div>
      <div class="col-6 pt-1 xtr tf-14 pt-2"><?php echo $data['ip']; ?></div>
      <div class="col-6 pt-2">
         <div class="row xtl">
            <div class="col-12"><span class="paytm-logo"></span></div>
            <div class="col-12 pt-2 ovfh"><?php echo $result ?></div>
         </div>
      </div>
      <div class="col-6 pt-2">
         <div class="row xtl">
            <div class="col-12 xtr tfw-7 tf-20 tfcdb">₹<span class="tf-28"><?php echo $data1['pamo']; ?></span></div>
            <div class="col-12 pt-2 tf-14 xtr">Lifafa Id: <?php echo $data['id']; ?></div>
         </div>
      </div>
   </div>

    

<?php
}
}
?>
</table>
<?php mysqli_close($conn); 

?>
  