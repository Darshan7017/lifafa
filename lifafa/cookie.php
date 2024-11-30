<?php
if(isset($_POST['submit'])){
setcookie('paytm',$num,time()-3600);
header("Location: cookie.php");
}
echo "Your Cookie : ".$_COOKIE['paytm'];
echo "<br><br>";
echo '<form method="POST"><button type="submit" name="submit">Remove Cookie</button></form>';
?>