<?php
include 'con.php';
$user=$_COOKIE["user"];
$records1 = mysqli_query($conn,"select * from user where mail='$user'"); 
$data1   = $records1->fetch_assoc();
$bid= $data1['botalert'];
$bal = $data1['bal'];
$checkperiod_Query=mysqli_query($conn,"select * from `colorresult` order by id desc limit 1");
$periodidRow=mysqli_fetch_array($checkperiod_Query);
$gameid=$periodidRow['gameid']; 
$result = $periodidRow['result'];
$records2 = mysqli_query($conn,"select * from colordata where user='$user' and gameid=$gameid"); 
$data   = $records2->fetch_assoc();
$amo= $data['wamo'];
$amoo = $data['amo'];
$bet = $data['bet'];
if($bet == "Voilet"){
$amo = $amoo*4.5;
}
if($amo == "Lose"){
	$status = '<div class="modal-body"><button type="button" class="btn btn-info bg-gradient-danger"style="color: #ffffff; border: none;margin: auto; width: 100%; font-size: 1.2rem; margin-top: 1rem; ">Lose</button></div>
<div class="modal-body">
                  <button type="button" class="btn btn-info bg-gradient-secondary"style="color: #ffffff; border: none;margin: auto; font-size: 1.2rem;">'.$result.'</button>  
                </div>
                <div style="border: 1px solid #000000; width: 20rem; margin: auto; padding: 1.1rem; border-radius: 3px;"> 
             <b >Game Id : '.$gameid.' <br> Selected : '.$bet.' <br> Amount : <font style="color: red">-'.$amoo.'₹</font></b>
                
                </div>
                	<div class="modal-body">
                	<button type="button" class="btn btn-info bg-gradient-primary"style="color: #ffffff; border: none;margin: auto; width: 100%; margin-bottom: 1rem; font-size: 1.2rem;" data-dismiss="modal">Ok</button> 
                </div>';
}else if($amo != "Lose"){
	$status = '<div class="modal-body"><button type="button" class="btn btn-info bg-gradient-success"style="color: #ffffff; border: none;margin: auto; width: 100%; font-size: 1.2rem; margin-top: 1rem; ">Win</button></div>
<div class="modal-body">
                  <button type="button" class="btn btn-info bg-gradient-secondary"style="color: #ffffff; border: none;margin: auto; font-size: 1.2rem;">'.$result.'</button>  
                </div>
                <div style="border: 1px solid #000000; width: 20rem; margin: auto; padding: 1.1rem; border-radius: 3px;"> 
             <b >Game Id : '.$gameid.' <br> Selected : '.$bet.' <br> Amount : <font style="color: green">+'.$amoo.'₹</font></b>
                
                </div>
                	<div class="modal-body">
                	<button type="button" class="btn btn-info bg-gradient-primary"style="color: #ffffff; border: none;margin: auto; width: 100%; margin-bottom: 1rem; font-size: 1.2rem;" data-dismiss="modal">Ok</button> 
                </div>
              '; 
}
$value = array( 
        "amo"=>"$amoo", 
        "status"=>"$status"
); 
$json = json_encode($value);
echo $json; 
?>
                
              