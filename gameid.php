<?php 
include("con.php");
	$checkperiod_Query=mysqli_query($conn,"select * from `colorresult` order by id desc limit 1");
$periodidRow=mysqli_fetch_array($checkperiod_Query);
$gameid=$periodidRow['gameid']+1; 
	echo $gameid;
	?>