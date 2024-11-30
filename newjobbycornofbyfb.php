<?php
include 'con.php';
$ip = $_SERVER["REMOTE_ADDR"];
$date = date('d-m-y h:i:s');
if($ip == "23.88.105.37"){
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
  $query3="SELECT * FROM colordata WHERE bet=0 and gameid=$gameid";
    $run3 = mysqli_query($conn,$query3);
  $n0=mysqli_num_rows($run3);
  $query4="SELECT * FROM colordata WHERE bet=1 and gameid=$gameid";
    $run4 = mysqli_query($conn,$query4);
  $n1=mysqli_num_rows($run4);
  $query3="SELECT * FROM colordata WHERE bet=2 and gameid=$gameid";
    $run3 = mysqli_query($conn,$query3);
  $n2=mysqli_num_rows($run3);
  $query4="SELECT * FROM colordata WHERE bet=3 and gameid=$gameid";
    $run4 = mysqli_query($conn,$query4);
  $n3=mysqli_num_rows($run4);
  $query5="SELECT * FROM colordata WHERE bet=4 and gameid=$gameid";
    $run5 = mysqli_query($conn,$query5);
  $n4=mysqli_num_rows($run5);
  $query6="SELECT * FROM colordata WHERE bet=5 and gameid=$gameid";
    $run6 = mysqli_query($conn,$query6);
  $n5=mysqli_num_rows($run6);
  $query7="SELECT * FROM colordata WHERE bet=6 and gameid=$gameid";
    $run7 = mysqli_query($conn,$query7);
  $n6=mysqli_num_rows($run7);
  $query8="SELECT * FROM colordata WHERE bet=7 and gameid=$gameid";
    $run8 = mysqli_query($conn,$query8);
  $n7=mysqli_num_rows($run8);
  $query9="SELECT * FROM colordata WHERE bet=8 and gameid=$gameid";
    $run9 = mysqli_query($conn,$query9);
  $n8=mysqli_num_rows($run9);
  $query10="SELECT * FROM colordata WHERE bet=9 and gameid=$gameid";
    $run10 = mysqli_query($conn,$query10);
  $n9=mysqli_num_rows($run10);
$records1 = mysqli_query($conn,"select * from admin where id='1'"); 
$data = $records1->fetch_assoc();
$result = $data['result'];
if($result == "auto"){
	$options = [0, 0, 0, 1, 1, 1, 1, 1, 1, 1]; 
	$num = $options[array_rand($options)];
	if($num == "1"){
	if($green < $red){
$nresult = min($n1,$n3,$n7,$n9);
 if($nresult == $n1){
 	$rresult = "1";
 } else if($nresult == $n3){
 	$rresult = "3";
 } else if($nresult == $n7){
 	$rresult = "7";
 } else if($nresult == $n9){
 	$rresult = "9";
 }
	}else if($red < $green){
		$nresult = min($n2,$n4,$n6,$n8);
 if($nresult == $n2){
 	$rresult = "2";
 } else if($nresult == $n4){
 	$rresult = "4";
 } else if($nresult == $n6){
 	$rresult = "6";
 } else if($nresult == $n8){
 	$rresult = "8";
 }
	} else {
		$nums = rand(0,1);
	if($nums == 1){
 $rresult = rand(0,9);
		}else{
			$rresult = rand(0,9);
	}
	}
	}else{
 $rresult = rand(0,9);
	}
}else{
$rresult = $data['num'];
}
$insert="INSERT INTO `colorresult` (`gameid`, `result`, `date`) VALUES ('$gameid','$rresult','$date')";
$ins=mysqli_query($conn,$insert); 
 if($rresult == 0){
	$sql = "SELECT * FROM colordata WHERE result='Pending' and gameid=$gameid";
$res = mysqli_query($conn,$sql);
while ($row = mysqli_fetch_assoc($res)){
$bet = $row['bet'];  
$amoo = $row['amo'];
$user = $row['user'];
$records = mysqli_query($conn,"select * from user where mail='$user'"); 
$dataaa = $records->fetch_assoc();
$bal = $dataaa['bal'];
if($bet == "Red"){
	$amo = $amoo*1.5;
$realamo = $amo+$bal;
	$insert="UPDATE `colordata` SET `result`='Success' WHERE `user`='$user' and result='Pending' and bet='Red'";
    $ins=mysqli_query($conn,$insert);
    $insert1="UPDATE `colordata` SET `wamo`='$amo' WHERE `user`='$user' and wamo='Pending' and bet='Red'";
    $ins1=mysqli_query($conn,$insert1);
    $uup="UPDATE user SET bal='$realamo' WHERE mail='$user'";
                   $uprun=mysqli_query($conn,$uup);
	}
	if($bet == "Voilet"){
	$amo = $amoo*4.5;
$realamo = $amo+$bal;
	$insert="UPDATE `colordata` SET `result`='Success' WHERE `user`='$user' and result='Pending' and bet='Voilet'";
    $ins=mysqli_query($conn,$insert);
    $insert1="UPDATE `colordata` SET `wamo`='$amo' WHERE `user`='$user' and wamo='Pending' and bet='Voilet'";
    $ins1=mysqli_query($conn,$insert1);
    $uup="UPDATE user SET bal='$realamo' WHERE mail='$user'";
                   $uprun=mysqli_query($conn,$uup);
	}
if($bet == $rresult){
		$amo = $amoo*9;
$realamo = $amo+$bal;
	$insert="UPDATE `colordata` SET `result`='Success' WHERE `user`='$user' and result='Pending' and bet='$rresult'";
    $ins=mysqli_query($conn,$insert);
    $insert1="UPDATE `colordata` SET `wamo`='$amo' WHERE `user`='$user' and wamo='Pending' and bet='$rresult'";
    $ins1=mysqli_query($conn,$insert1);
    $uup="UPDATE user SET bal='$realamo' WHERE mail='$user'";
                   $uprun=mysqli_query($conn,$uup);
	}
if($bet !== $rresult || $bet !== 'Red' || $bet !== 'Voilet'){
		$insert="UPDATE `colordata` SET `result`='Failed' WHERE `user`='$user' and result='Pending' and bet !='Red' and bet != 'Voilet' and bet != '$rresult'";
		
    $ins=mysqli_query($conn,$insert);
    $insert1="UPDATE `colordata` SET `wamo`='Lose' WHERE `user`='$user' and wamo='Pending' and bet !='Red' and bet != 'Voilet' and bet != '$rresult'";
    $ins1=mysqli_query($conn,$insert1);
    }
}
} else if($rresult == 1){
	$sql = "SELECT * FROM colordata WHERE result='Pending' and gameid=$gameid";
$res = mysqli_query($conn,$sql);
while ($row = mysqli_fetch_assoc($res)){
$bet = $row['bet'];  
$amoo = $row['amo'];
$user = $row['user'];
$records = mysqli_query($conn,"select * from user where mail='$user'"); 
$dataaa = $records->fetch_assoc();
$bal = $dataaa['bal'];
if($bet == "Green"){
	$amo = $amoo*2;
$realamo = $amo+$bal;
	$insert="UPDATE `colordata` SET `result`='Success' WHERE `user`='$user' and result='Pending' and bet='Green'";
    $ins=mysqli_query($conn,$insert);
    $insert1="UPDATE `colordata` SET `wamo`='$amo' WHERE `user`='$user' and wamo='Pending' and bet='Green'";
    $ins1=mysqli_query($conn,$insert1);
    $uup="UPDATE user SET bal='$realamo' WHERE mail='$user'";
                   $uprun=mysqli_query($conn,$uup);
	}
if($bet == $rresult){
		$amo = $amoo*9;
$realamo = $amo+$bal;
	$insert="UPDATE `colordata` SET `result`='Success' WHERE `user`='$user' and result='Pending' and bet='$rresult'";
    $ins=mysqli_query($conn,$insert);
    $insert1="UPDATE `colordata` SET `wamo`='$amo' WHERE `user`='$user' and wamo='Pending' and bet='$rresult'";
    $ins1=mysqli_query($conn,$insert1);
    $uup="UPDATE user SET bal='$realamo' WHERE mail='$user'";
                   $uprun=mysqli_query($conn,$uup);
	}
if($bet !== $rresult || $bet !== 'Green'){
		$insert="UPDATE `colordata` SET `result`='Failed' WHERE `user`='$user' and result='Pending' and bet !='Green' and bet != '$rresult'";
		
    $ins=mysqli_query($conn,$insert);
    $insert1="UPDATE `colordata` SET `wamo`='Lose' WHERE `user`='$user' and wamo='Pending' and bet !='Green' and bet != '$rresult'";
    $ins1=mysqli_query($conn,$insert1);
    }
}
} else if($rresult == 2){
	$sql = "SELECT * FROM colordata WHERE result='Pending' and gameid=$gameid";
$res = mysqli_query($conn,$sql);
while ($row = mysqli_fetch_assoc($res)){
$bet = $row['bet'];  
$amoo = $row['amo'];
$user = $row['user'];
$records = mysqli_query($conn,"select * from user where mail='$user'"); 
$dataaa = $records->fetch_assoc();
$bal = $dataaa['bal'];
if($bet == "Red"){
	$amo = $amoo*2;
$realamo = $amo+$bal;
	$insert="UPDATE `colordata` SET `result`='Success' WHERE `user`='$user' and result='Pending' and bet='Red'";
    $ins=mysqli_query($conn,$insert);
    $insert1="UPDATE `colordata` SET `wamo`='$amo' WHERE `user`='$user' and wamo='Pending' and bet='Red'";
    $ins1=mysqli_query($conn,$insert1);
    $uup="UPDATE user SET bal='$realamo' WHERE mail='$user'";
                   $uprun=mysqli_query($conn,$uup);
	}
if($bet == $rresult){
		$amo = $amoo*9;
$realamo = $amo+$bal;
	$insert="UPDATE `colordata` SET `result`='Success' WHERE `user`='$user' and result='Pending' and bet='$rresult'";
    $ins=mysqli_query($conn,$insert);
    $insert1="UPDATE `colordata` SET `wamo`='$amo' WHERE `user`='$user' and wamo='Pending' and bet='$rresult'";
    $ins1=mysqli_query($conn,$insert1);
    $uup="UPDATE user SET bal='$realamo' WHERE mail='$user'";
                   $uprun=mysqli_query($conn,$uup);
	}
if($bet !== $rresult || $bet !== 'Red'){
		$insert="UPDATE `colordata` SET `result`='Failed' WHERE `user`='$user' and result='Pending' and bet !='Red' and bet != '$rresult'";
		
    $ins=mysqli_query($conn,$insert);
    $insert1="UPDATE `colordata` SET `wamo`='Lose' WHERE `user`='$user' and wamo='Pending' and bet !='Red' and bet != '$rresult'";
    $ins1=mysqli_query($conn,$insert1);
    }
}
} else if($rresult == 3){
	$sql = "SELECT * FROM colordata WHERE result='Pending' and gameid=$gameid";
$res = mysqli_query($conn,$sql);
while ($row = mysqli_fetch_assoc($res)){
$bet = $row['bet'];  
$amoo = $row['amo'];
$user = $row['user'];
$records = mysqli_query($conn,"select * from user where mail='$user'"); 
$dataaa = $records->fetch_assoc();
$bal = $dataaa['bal'];
if($bet == "Green"){
	$amo = $amoo*2;
$realamo = $amo+$bal;
	$insert="UPDATE `colordata` SET `result`='Success' WHERE `user`='$user' and result='Pending' and bet='Green'";
    $ins=mysqli_query($conn,$insert);
    $insert1="UPDATE `colordata` SET `wamo`='$amo' WHERE `user`='$user' and wamo='Pending' and bet='Green'";
    $ins1=mysqli_query($conn,$insert1);
    $uup="UPDATE user SET bal='$realamo' WHERE mail='$user'";
                   $uprun=mysqli_query($conn,$uup);
	}
if($bet == $rresult){
		$amo = $amoo*9;
$realamo = $amo+$bal;
	$insert="UPDATE `colordata` SET `result`='Success' WHERE `user`='$user' and result='Pending' and bet='$rresult'";
    $ins=mysqli_query($conn,$insert);
    $insert1="UPDATE `colordata` SET `wamo`='$amo' WHERE `user`='$user' and wamo='Pending' and bet='$rresult'";
    $ins1=mysqli_query($conn,$insert1);
    $uup="UPDATE user SET bal='$realamo' WHERE mail='$user'";
                   $uprun=mysqli_query($conn,$uup);
	}
if($bet !== $rresult || $bet !== 'Green'){
		$insert="UPDATE `colordata` SET `result`='Failed' WHERE `user`='$user' and result='Pending' and bet !='Green' and bet != '$rresult'";
		
    $ins=mysqli_query($conn,$insert);
    $insert1="UPDATE `colordata` SET `wamo`='Lose' WHERE `user`='$user' and wamo='Pending' and bet !='Green' and bet != '$rresult'";
    $ins1=mysqli_query($conn,$insert1);
    }
}
} else if($rresult == 4){
	$sql = "SELECT * FROM colordata WHERE result='Pending' and gameid=$gameid";
$res = mysqli_query($conn,$sql);
while ($row = mysqli_fetch_assoc($res)){
$bet = $row['bet'];  
$amoo = $row['amo'];
$user = $row['user'];
$records = mysqli_query($conn,"select * from user where mail='$user'"); 
$dataaa = $records->fetch_assoc();
$bal = $dataaa['bal'];
if($bet == "Red"){
	$amo = $amoo*2;
$realamo = $amo+$bal;
	$insert="UPDATE `colordata` SET `result`='Success' WHERE `user`='$user' and result='Pending' and bet='Red'";
    $ins=mysqli_query($conn,$insert);
    $insert1="UPDATE `colordata` SET `wamo`='$amo' WHERE `user`='$user' and wamo='Pending' and bet='Red'";
    $ins1=mysqli_query($conn,$insert1);
    $uup="UPDATE user SET bal='$realamo' WHERE mail='$user'";
                   $uprun=mysqli_query($conn,$uup);
	}
if($bet == $rresult){
		$amo = $amoo*9;
$realamo = $amo+$bal;
	$insert="UPDATE `colordata` SET `result`='Success' WHERE `user`='$user' and result='Pending' and bet='$rresult'";
    $ins=mysqli_query($conn,$insert);
    $insert1="UPDATE `colordata` SET `wamo`='$amo' WHERE `user`='$user' and wamo='Pending' and bet='$rresult'";
    $ins1=mysqli_query($conn,$insert1);
    $uup="UPDATE user SET bal='$realamo' WHERE mail='$user'";
                   $uprun=mysqli_query($conn,$uup);
	}
if($bet !== $rresult || $bet !== 'Red'){
		$insert="UPDATE `colordata` SET `result`='Failed' WHERE `user`='$user' and result='Pending' and bet !='Red' and bet != '$rresult'";
		
    $ins=mysqli_query($conn,$insert);
    $insert1="UPDATE `colordata` SET `wamo`='Lose' WHERE `user`='$user' and wamo='Pending' and bet !='Red' and bet != '$rresult'";
    $ins1=mysqli_query($conn,$insert1);
    }
}
} else if($rresult == 5){
	$sql = "SELECT * FROM colordata WHERE result='Pending' and gameid=$gameid";
$res = mysqli_query($conn,$sql);
while ($row = mysqli_fetch_assoc($res)){
$bet = $row['bet'];  
$amoo = $row['amo'];
$user = $row['user'];
$records = mysqli_query($conn,"select * from user where mail='$user'"); 
$dataaa = $records->fetch_assoc();
$bal = $dataaa['bal'];
if($bet == "Green"){
	$amo = $amoo*1.5;
$realamo = $amo+$bal;
	$insert="UPDATE `colordata` SET `result`='Success' WHERE `user`='$user' and result='Pending' and bet='Green'";
    $ins=mysqli_query($conn,$insert);
    $insert1="UPDATE `colordata` SET `wamo`='$amo' WHERE `user`='$user' and wamo='Pending' and bet='Green'";
    $ins1=mysqli_query($conn,$insert1);
    $uup="UPDATE user SET bal='$realamo' WHERE mail='$user'";
                   $uprun=mysqli_query($conn,$uup);
	}
	if($bet == "Voilet"){
	$amo = $amoo*4.5;
$realamo = $amo+$bal;
	$insert="UPDATE `colordata` SET `result`='Success' WHERE `user`='$user' and result='Pending' and bet='Voilet'";
    $ins=mysqli_query($conn,$insert);
    $insert1="UPDATE `colordata` SET `wamo`='$amo' WHERE `user`='$user' and wamo='Pending' and bet='Voilet'";
    $ins1=mysqli_query($conn,$insert1);
    $uup="UPDATE user SET bal='$realamo' WHERE mail='$user'";
                   $uprun=mysqli_query($conn,$uup);
	}
if($bet == $rresult){
		$amo = $amoo*9;
$realamo = $amo+$bal;
	$insert="UPDATE `colordata` SET `result`='Success' WHERE `user`='$user' and result='Pending' and bet='$rresult'";
    $ins=mysqli_query($conn,$insert);
    $insert1="UPDATE `colordata` SET `wamo`='$amo' WHERE `user`='$user' and wamo='Pending' and bet='$rresult'";
    $ins1=mysqli_query($conn,$insert1);
    $uup="UPDATE user SET bal='$realamo' WHERE mail='$user'";
                   $uprun=mysqli_query($conn,$uup);
	}
if($bet !== $rresult || $bet !== 'Green' || $bet !== 'Voilet'){
		$insert="UPDATE `colordata` SET `result`='Failed' WHERE `user`='$user' and result='Pending' and bet !='Green' and bet != 'Voilet' and bet != '$rresult'";
		
    $ins=mysqli_query($conn,$insert);
    $insert1="UPDATE `colordata` SET `wamo`='Lose' WHERE `user`='$user' and wamo='Pending' and bet !='Green' and bet != 'Voilet' and bet != '$rresult'";
    $ins1=mysqli_query($conn,$insert1);
    }
}
} else if($rresult == 6){
	$sql = "SELECT * FROM colordata WHERE result='Pending' and gameid=$gameid";
$res = mysqli_query($conn,$sql);
while ($row = mysqli_fetch_assoc($res)){
$bet = $row['bet'];  
$amoo = $row['amo'];
$user = $row['user'];
$records = mysqli_query($conn,"select * from user where mail='$user'"); 
$dataaa = $records->fetch_assoc();
$bal = $dataaa['bal'];
if($bet == "Red"){
	$amo = $amoo*2;
$realamo = $amo+$bal;
	$insert="UPDATE `colordata` SET `result`='Success' WHERE `user`='$user' and result='Pending' and bet='Red'";
    $ins=mysqli_query($conn,$insert);
    $insert1="UPDATE `colordata` SET `wamo`='$amo' WHERE `user`='$user' and wamo='Pending' and bet='Red'";
    $ins1=mysqli_query($conn,$insert1);
    $uup="UPDATE user SET bal='$realamo' WHERE mail='$user'";
                   $uprun=mysqli_query($conn,$uup);
	}
if($bet == $rresult){
		$amo = $amoo*9;
$realamo = $amo+$bal;
	$insert="UPDATE `colordata` SET `result`='Success' WHERE `user`='$user' and result='Pending' and bet='$rresult'";
    $ins=mysqli_query($conn,$insert);
    $insert1="UPDATE `colordata` SET `wamo`='$amo' WHERE `user`='$user' and wamo='Pending' and bet='$rresult'";
    $ins1=mysqli_query($conn,$insert1);
    $uup="UPDATE user SET bal='$realamo' WHERE mail='$user'";
                   $uprun=mysqli_query($conn,$uup);
	}
if($bet !== $rresult || $bet !== 'Red'){
		$insert="UPDATE `colordata` SET `result`='Failed' WHERE `user`='$user' and result='Pending' and bet !='Red' and bet != '$rresult'";
		
    $ins=mysqli_query($conn,$insert);
    $insert1="UPDATE `colordata` SET `wamo`='Lose' WHERE `user`='$user' and wamo='Pending' and bet !='Red' and bet != '$rresult'";
    $ins1=mysqli_query($conn,$insert1);
    }
}
} else if($rresult == 7){
	$sql = "SELECT * FROM colordata WHERE result='Pending' and gameid=$gameid";
$res = mysqli_query($conn,$sql);
while ($row = mysqli_fetch_assoc($res)){
$bet = $row['bet'];  
$amoo = $row['amo'];
$user = $row['user'];
$records = mysqli_query($conn,"select * from user where mail='$user'"); 
$dataaa = $records->fetch_assoc();
$bal = $dataaa['bal'];
if($bet == "Green"){
	$amo = $amoo*2;
$realamo = $amo+$bal;
	$insert="UPDATE `colordata` SET `result`='Success' WHERE `user`='$user' and result='Pending' and bet='Green'";
    $ins=mysqli_query($conn,$insert);
    $insert1="UPDATE `colordata` SET `wamo`='$amo' WHERE `user`='$user' and wamo='Pending' and bet='Green'";
    $ins1=mysqli_query($conn,$insert1);
    $uup="UPDATE user SET bal='$realamo' WHERE mail='$user'";
                   $uprun=mysqli_query($conn,$uup);
	}
if($bet == $rresult){
		$amo = $amoo*9;
$realamo = $amo+$bal;
	$insert="UPDATE `colordata` SET `result`='Success' WHERE `user`='$user' and result='Pending' and bet='$rresult'";
    $ins=mysqli_query($conn,$insert);
    $insert1="UPDATE `colordata` SET `wamo`='$amo' WHERE `user`='$user' and wamo='Pending' and bet='$rresult'";
    $ins1=mysqli_query($conn,$insert1);
    $uup="UPDATE user SET bal='$realamo' WHERE mail='$user'";
                   $uprun=mysqli_query($conn,$uup);
	}
if($bet !== $rresult || $bet !== 'Green'){
		$insert="UPDATE `colordata` SET `result`='Failed' WHERE `user`='$user' and result='Pending' and bet !='Green' and bet != '$rresult'";
		
    $ins=mysqli_query($conn,$insert);
    $insert1="UPDATE `colordata` SET `wamo`='Lose' WHERE `user`='$user' and wamo='Pending' and bet !='Green' and bet != '$rresult'";
    $ins1=mysqli_query($conn,$insert1);
    }
}
} else if($rresult == 8){
	$sql = "SELECT * FROM colordata WHERE result='Pending' and gameid=$gameid";
$res = mysqli_query($conn,$sql);
while ($row = mysqli_fetch_assoc($res)){
$bet = $row['bet'];  
$amoo = $row['amo'];
$user = $row['user'];
$records = mysqli_query($conn,"select * from user where mail='$user'"); 
$dataaa = $records->fetch_assoc();
$bal = $dataaa['bal'];
if($bet == "Red"){
	$amo = $amoo*2;
$realamo = $amo+$bal;
	$insert="UPDATE `colordata` SET `result`='Success' WHERE `user`='$user' and result='Pending' and bet='Red'";
    $ins=mysqli_query($conn,$insert);
    $insert1="UPDATE `colordata` SET `wamo`='$amo' WHERE `user`='$user' and wamo='Pending' and bet='Red'";
    $ins1=mysqli_query($conn,$insert1);
    $uup="UPDATE user SET bal='$realamo' WHERE mail='$user'";
                   $uprun=mysqli_query($conn,$uup);
	}
if($bet == $rresult){
		$amo = $amoo*9;
$realamo = $amo+$bal;
	$insert="UPDATE `colordata` SET `result`='Success' WHERE `user`='$user' and result='Pending' and bet='$rresult'";
    $ins=mysqli_query($conn,$insert);
    $insert1="UPDATE `colordata` SET `wamo`='$amo' WHERE `user`='$user' and wamo='Pending' and bet='$rresult'";
    $ins1=mysqli_query($conn,$insert1);
    $uup="UPDATE user SET bal='$realamo' WHERE mail='$user'";
                   $uprun=mysqli_query($conn,$uup);
	}
if($bet !== $rresult || $bet !== 'Red'){
		$insert="UPDATE `colordata` SET `result`='Failed' WHERE `user`='$user' and result='Pending' and bet !='Red' and bet != '$rresult'";
		
    $ins=mysqli_query($conn,$insert);
    $insert1="UPDATE `colordata` SET `wamo`='Lose' WHERE `user`='$user' and wamo='Pending' and bet !='Red' and bet != '$rresult'";
    $ins1=mysqli_query($conn,$insert1);
    }
}
} else if($rresult == 9){
	$sql = "SELECT * FROM colordata WHERE result='Pending' and gameid=$gameid";
$res = mysqli_query($conn,$sql);
while ($row = mysqli_fetch_assoc($res)){
$bet = $row['bet'];  
$amoo = $row['amo'];
$user = $row['user'];
$records = mysqli_query($conn,"select * from user where mail='$user'"); 
$dataaa = $records->fetch_assoc();
$bal = $dataaa['bal'];
if($bet == "Green"){
	$amo = $amoo*2;
$realamo = $amo+$bal;
	$insert="UPDATE `colordata` SET `result`='Success' WHERE `user`='$user' and result='Pending' and bet='Green'";
    $ins=mysqli_query($conn,$insert);
    $insert1="UPDATE `colordata` SET `wamo`='$amo' WHERE `user`='$user' and wamo='Pending' and bet='Green'";
    $ins1=mysqli_query($conn,$insert1);
    $uup="UPDATE user SET bal='$realamo' WHERE mail='$user'";
                   $uprun=mysqli_query($conn,$uup);
	}
if($bet == $rresult){
		$amo = $amoo*9;
$realamo = $amo+$bal;
	$insert="UPDATE `colordata` SET `result`='Success' WHERE `user`='$user' and result='Pending' and bet='$rresult'";
    $ins=mysqli_query($conn,$insert);
    $insert1="UPDATE `colordata` SET `wamo`='$amo' WHERE `user`='$user' and wamo='Pending' and bet='$rresult'";
    $ins1=mysqli_query($conn,$insert1);
    $uup="UPDATE user SET bal='$realamo' WHERE mail='$user'";
                   $uprun=mysqli_query($conn,$uup);
	}
if($bet !== $rresult || $bet !== 'Green'){
		$insert="UPDATE `colordata` SET `result`='Failed' WHERE `user`='$user' and result='Pending' and bet !='Green' and bet != '$rresult'";
		
    $ins=mysqli_query($conn,$insert);
    $insert1="UPDATE `colordata` SET `wamo`='Lose' WHERE `user`='$user' and wamo='Pending' and bet !='Green' and bet != '$rresult'";
    $ins1=mysqli_query($conn,$insert1);
    }
}
}
}else{
	$tex='<b>⚠️ Unathorised Cron Job Fired 

♂️ IP :- '. $ip.'
📅 Date :- '.$time.' '.$date.'

⚡ Powered By Fast Back
</b>';
  $text=urlencode("$tex");
  file_get_contents('https://api.telegram.org/bot6172365321:AAFJ2E4T_EJDEcdUNyD7FuAfS2QTu6jUhww/sendMessage?chat_id=1516610662&text='.$text.'&parse_mode=html');
	
}
echo "<br><br>".$insert."<br><br>".$insert1."<br><br>".$sql."<br><br>".$bet."<br><br>".$user."<br><br>".$rresult;
?>