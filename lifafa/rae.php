<?php
$nume = $_POST['num'];
$num = base64_encode($nume);
$id = $_POST['id'];
echo ' <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
  <script src="js/ruang-admin.min.js"></script>
  <script src="vendor/chart.js/Chart.min.js"></script>
  <script src="js/demo/chart-area-demo.js"></script>  
 <div class="form-group">        
<input type="text" class="form-control" id="link" value="http://localhost:8080/'.$id.'/'.$num.'" readonly></div>     
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
  ?>