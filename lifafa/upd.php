<?php
error_reporting(0);
include'con.php';
$id=$_GET['lid'];
$sel="select * from lifdata where id='$id'";
$run=mysqli_query($conn,$sel);
if(mysqli_num_rows($run) <= 0 ){
echo"invalid Lifafa";
}else{
$data=mysqli_fetch_assoc($run);
$per=$data['pamo'];
$tamo=$data['tamo'];
$tot=$data['total'];
$com=$data['com'];
$link=$data['link'];
$tit=$data['title'];
$user=$data['user'];
$code=$data['code'];
$type=$data['type'];
$iscode=$data['iscode'];
$isuname=$data['isuname'];
$alloff=$data['alloff'];
$co=urlencode($com);
$max=$tamo*$per;
?>
<center
 <font size="4" style="font-weight:600">
        <font color="red" size="4">&#8377;<?php echo"$tot";?></font><font color="blue" size="4">/</font>&#8377;<?php echo"$max";?> Claimed 
        </font></center>

<meta http-equiv='refresh' content='1;url=upd.php?lid=<?php echo"$id";?>'>
<?php
}
?>