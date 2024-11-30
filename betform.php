<?php
$button = $_POST['button'];
echo '<form method="POST">
                      	<center>
                	<div class="form-group">
                      <input type="number" class="form-control" placeholder="Enter Bet Amount" value="5" id="betamount" readonly>
                      	<input type="hidden" value="'.$button.'" id="button">
                      </div>
                      
                      
                      <button type="button" class="btn btn-dark bg-gradient-danger" style="color: #ffffff; border: none; margin-left: 0.5rem;" id="m1">-1</button>
                      <button type="button" class="btn btn-dark bg-gradient-danger" style="color: #ffffff; border: none; margin: auto;" id="m5">-5</button>
                      <button type="button" class="btn btn-dark bg-gradient-danger" style="color: #ffffff; border: none; margin: auto;" id="m10">-10</button>
                      <button type="button" class="btn btn-dark bg-gradient-danger" style="color: #ffffff; border: none; margin: auto;" id="m20">-50</button>
                      <button type="button" class="btn btn-dark bg-gradient-danger" style="color: #ffffff; border: none; margin: auto;" id="m50">-100</button>
                      
                      <br>
                      	<div style="height: 1rem;"></div>
                      <button type="button" class="btn btn-dark bg-gradient-success" style="color: #ffffff; border: none; margin-left: 0.5rem;" id="p1">+1</button>
                      <button type="button" class="btn btn-dark bg-gradient-success" style="color: #ffffff; border: none; margin: auto;" id="p5">+5</button>
                      <button type="button" class="btn btn-dark bg-gradient-success" style="color: #ffffff; border: none; margin: auto;" id="p10">+10</button>
                      <button type="button" class="btn btn-dark bg-gradient-success" style="color: #ffffff; border: none; margin: auto;" id="p20">+50</button>
                      <button type="button" class="btn btn-dark bg-gradient-success" style="color: #ffffff; border: none; margin: auto;" id="p50">+100</button>
                      
                      
                      <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
<script>
     $("#p1").click(function () { 
   var amo = $("#betamount").val(); 
   var total = amo*100/100+1;  
document.getElementById("betamount").setAttribute("value", total);
            }); 
            $("#p5").click(function () { 
   var amo = $("#betamount").val(); 
   var total = amo*100/100+5;  
document.getElementById("betamount").setAttribute("value", total);
            }); 
            $("#p10").click(function () { 
   var amo = $("#betamount").val(); 
   var total = amo*100/100+10;  
document.getElementById("betamount").setAttribute("value", total);
            }); 
            $("#p20").click(function () { 
   var amo = $("#betamount").val(); 
   var total = amo*100/100+50;  
document.getElementById("betamount").setAttribute("value", total);
            }); 
            $("#p50").click(function () { 
   var amo = $("#betamount").val(); 
   var total = amo*100/100+100;  
document.getElementById("betamount").setAttribute("value", total);
            }); 
            $("#p100").click(function () { 
   var amo = $("#betamount").val(); 
   var total = amo*100/100+100;  
document.getElementById("betamount").setAttribute("value", total);
            }); 
            $("#m1").click(function () { 
   var amo = $("#betamount").val(); 
   var total = amo*100/100-1;  
   if(total > 0){
document.getElementById("betamount").setAttribute("value", total);
}
            }); 
            $("#m5").click(function () { 
   var amo = $("#betamount").val(); 
   var total = amo*100/100-5;  
   if(total > 0){
document.getElementById("betamount").setAttribute("value", total);
}
            }); 
            $("#m10").click(function () { 
   var amo = $("#betamount").val(); 
   var total = amo*100/100-10;  
   if(total > 0){
document.getElementById("betamount").setAttribute("value", total);
}
            }); 
            $("#m20").click(function () { 
   var amo = $("#betamount").val(); 
   var total = amo*100/100-50;  
   if(total > 0){
document.getElementById("betamount").setAttribute("value", total);
}
            }); 
            $("#m50").click(function () { 
   var amo = $("#betamount").val(); 
   var total = amo*100/100-100;  
   if(total > 0){
document.getElementById("betamount").setAttribute("value", total);
}
            }); 
            $("#m100").click(function () { 
   var amo = $("#betamount").val(); 
   var total = amo*100/100-100;  
   if(total > 0){
document.getElementById("betamount").setAttribute("value", total);
}
            }); 
</script>';
?>