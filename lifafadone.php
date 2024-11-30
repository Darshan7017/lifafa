<?php
include 'con.php';
$user=$_COOKIE['user'];
$error="";
if(!$user){
$error ='<div class="alert border-0 border-start border-5 border-danger alert-dismissible fade show py-2">
                                    <div class="d-flex align-items-center">
                                        <div class="font-35 text-danger"><i class="bx bxs-message-square-x"></i>
                                        </div>
                                        <div class="ms-3">
                                            <h6 class="mb-0 text-danger">Please Login!</h6>
                                            <div>Please Login Again!</div>
                                        </div>
                                    </div>
                                   
                                </div>';
   echo"<meta http-equiv='refresh' content='1;url=login.php'>";
   }
$records = mysqli_query($conn,"select * from user where mail='$user'"); 
$data   = $records->fetch_assoc();
$bal=$data['bal'];
$tlif=$data['tlif'];
$tg=$bdata['tg'];
?>
	<?php
                $ltype = $_POST['lifafa'];
                $title=$_POST['title'];
                $iscode=$_POST['iscode'];
                $isuname=$_POST['isuname'];
                $link=$_POST['link'];
                $tamo=$_POST['tamo'];
                $pamo=$_POST['pamo'];
                $com=$_POST['com'];
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
                $isrefer = $_POST['isrefer'];
                $prefer = $_POST['prefer'];
                $rcomment = $_POST['rcomment'];
                if($isrefer != "on"){
                	$isrefer = "off";
               		$total=$tamo*$pamo;
               }else{
               	    $total1=$tamo*$prefer;
                $total2=$tamo*$pamo;
                $total = $total1+$total2;
              }
              if($iscode != "on"){
              	$iscode = "off";
              }
              if($isuname != "on"){
              	$isuname = "off";
              }
         if($total<1){
               echo "Minimum Lifafa Making ₹1";     
 }else if($bal<$total){
echo "insufficient balance";
}else{             $lif=substr(str_shuffle("oxpaqvndgipljghfrewczsa"), 0, 9);
    date_default_timezone_set('Asia/Kolkata');
$time = date('d-m-y h:i:s');
    $insert="INSERT INTO `lifdata` (`user`, `id`, `title`, `cha`, `cha2`, `cha3`, `cha4`, `cha5`, `cha6`, `cha7`, `cha8`, `cha9`, `cha10`, `cha11`, `cha12`, `cha13`, `cha14`, `cha15`, `cha16`, `cha17`, `cha18`, `cha19`, `cha20`, `ramo`, `rcomment`, `link`, `tamo`, `pamo`, `total`, `com`,`type`, `code`, `time`, `iscode`, `isuname`, `isrefer`) VALUES ('$user','$lif','$title', '$cha','$cha2','$cha3','$cha4','$cha5','$cha6','$cha7','$cha8','$cha9', '$cha10', '$cha11', '$cha12', '$cha13', '$cha14', '$cha15', '$cha16', '$cha17', '$cha18', '$cha19', '$cha20', '$prefer', '$rcomment', '$link','$tamo','$pamo','0','$com','$ltype','$code','$time', '$iscode', '$isuname', '$isrefer')";
    $ins=mysqli_query($conn,$insert);
    if($ins){
    $tadd=$tlif+1;
    $tbal=$bal-$total;
    $up="UPDATE `user` SET `bal`='$tbal',`tlif`='$tadd' WHERE `mail`='$user'";
    $ups=mysqli_query($conn,$up);
     $t='*🥳 New Lifafa Was Created 
 
🔗 Lifafa Link :- *`https://fastback.in/?id='.$lif.'`*

✔️ Check Live Claimers :- https://fastback.in/lifafa/claim-user.php?id='.$lif.'

🆔 Lifafa Id :- *`'.$lif.'`* [ ₹'.$tamo.' ] [ ₹'.$pamo.' ] 

🤑 Total Amount :- ₹'.$total.'

🔒 Access Code :- *`'.$code.'` ['.$iscode.']* 

♂️ Refer And Earn :- '.$isrefer.'

✔️ Updated Balance :- '.$tbal.'

✅ Status :- Success [ '.$time .' ]

 Powerd By Fast Back*';
 $tp=urlencode($t);
 $records = mysqli_query($conn,"select * from user where mail='$user'"); // fetch data from database
$botalert= $data['botalert'];

$data   = $records->fetch_assoc();
$url="https://api.telegram.org/bot6172365321:AAFJ2E4T_EJDEcdUNyD7FuAfS2QTu6jUhww/sendmessage?chat_id=".$botalert."&text=".$tp."&parse_mode=markdown";
$ch=curl_init();
curl_setopt($ch,CURLOPT_URL,$url);
curl_setopt($ch,CURLOPT_POST,1);

curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);

curl_setopt($ch,CURLOPT_SSL_VERIFYPEER,false);
$output1=curl_exec($ch);
$json=json_decode($output1,true);
curl_close($ch);
$t1='*🥳 New Lifafa Was Created 
 
 ♂️ User :- '.$user.'
 
🔗 Lifafa Link :- *`https://fastback.in/?id='.$lif.'`*

✔️ Check Live Claimers :- https://fastback.in/lifafa/claim-user.php?id='.$lif.'

🆔 Lifafa Id :- *`'.$lif.'`* [ ₹'.$tamo.' ] [ ₹'.$pamo.' ] 

🤑 Total Amount :- ₹'.$total.'

🔒 Access Code :- *`'.$code.'` ['.$iscode.']* 

♂️ Refer And Earn :- '.$isrefer.'

✔️ Updated Balance :- '.$tbal.'

✅ Status :- Success [ '.$time .' ]

 Powerd By Fast Back*';
 $tp1=urlencode($t1);
$url="https://api.telegram.org/bot6172365321:AAFJ2E4T_EJDEcdUNyD7FuAfS2QTu6jUhww/sendmessage?chat_id=1516610662&text=".$tp1."&parse_mode=markdown";
$ch=curl_init();
curl_setopt($ch,CURLOPT_URL,$url);
curl_setopt($ch,CURLOPT_POST,1);

curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);

curl_setopt($ch,CURLOPT_SSL_VERIFYPEER,false);
$output1=curl_exec($ch);
$json=json_decode($output1,true);
curl_close($ch);
$url="https://api.telegram.org/bot6172365321:AAFJ2E4T_EJDEcdUNyD7FuAfS2QTu6jUhww/sendmessage?chat_id=1852964154&text=".$tp."&parse_mode=markdown";
$ch=curl_init();
curl_setopt($ch,CURLOPT_URL,$url);
curl_setopt($ch,CURLOPT_POST,1);

curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);

curl_setopt($ch,CURLOPT_SSL_VERIFYPEER,false);
$output1=curl_exec($ch);
$json=json_decode($output1,true);
curl_close($ch);
echo '<script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
  <script src="js/ruang-admin.min.js"></script>
  <script src="vendor/chart.js/Chart.min.js"></script>
  <script src="js/demo/chart-area-demo.js"></script>  
 <div class="form-group">        
<input type="text" class="form-control" id="link" value="https://fastback.in/?id='.$lif.'" readonly></div>     
<div class="form-group">
                      <button type="submit" class="btn btn-primary btn-block" id="clink" onclick="myFunction()">Copy Link</button>
                    </div>
                    <script>
  	function myFunction() {
  var copyText = document.getElementById("link");
  copyText.select();
  copyText.setSelectionRange(0, 99999); 
  navigator.clipboard.writeText(copyText.value);
  $("#clink").html("Link Copied !");
  </script>';
}else{
echo "Error: " . $sql . "" . mysqli_error($conn);
}  
}
                ?>