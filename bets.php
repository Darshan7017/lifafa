<?php
include 'con.php';
$user=$_COOKIE["user"];
$checkperiod_Query=mysqli_query($conn,"select * from `colorresult` order by id desc limit 1");
$periodidRow=mysqli_fetch_array($checkperiod_Query);
$gameid=$periodidRow['gameid']+1; 
$query="SELECT * FROM colordata WHERE bet='Green' and gameid=$gameid";
    $run = mysqli_query($conn,$query);
  $green=mysqli_num_rows($run);
  $query1="SELECT * FROM colordata WHERE bet='Voilet' and gameid=$gameid";
    $run1 = mysqli_query($conn,$query1);
  $voilet=mysqli_num_rows($run1);
  $query2="SELECT * FROM colordata WHERE bet='Red' and gameid=$gameid";
    $run2 = mysqli_query($conn,$query2);
  $red=mysqli_num_rows($run2);
function check($number){ 
    if($number == 0) 
        return 1; 
    else if($number == 1) 
        return 0; 
    else if($number<0) 
        return check(-$number); 
    else
        return check($number-2);         
} 
if(!$user){
echo '
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
<div class="row">
            <div class="col-lg-12">
              <div class="card mb-4">
                <div class="card-header py-3">
                
                  <h6 class="m-0 font-weight-bold text-primary">Bets And Records</h6>
            
                
                <div class="card-body">
              
                <button type="button" class="btn btn-info bg-gradient-success"style="color: #ffffff; border: none;margin: auto; width: 100%; margin-bottom: 1rem;">Total Bets On Green : <?= $green; ?></button>  	<button type="button" class="btn btn-info bg-gradient-primary"style="color: #ffffff; border: none;margin: auto; width: 100%; margin-bottom: 1rem;">Total Bets On Voilet : <?= $voilet; ?></button>
                <button type="button" class="btn btn-info bg-gradient-danger"style="color: #ffffff; border: none;margin: auto; width: 100%;">Total Bets On Red : <?= $red; ?></button><br><br>
                <?php
$sql = "SELECT * FROM colorresult order by id desc limit 50";
$res = mysqli_query($conn,$sql);
while ($row = mysqli_fetch_assoc($res)){
$resuu = $row['result'];
$gameid = $row['gameid'];
	$resu = '<button type="button" class="btn-sm bg-gradient-secondary mb-1" style="border: none; color: #fff;">'.$resuu.'</button>
              ';
?>
	<?= $resu; ?>
		<?php } ?>
                </div>
                
              </div>
            </div>
                       