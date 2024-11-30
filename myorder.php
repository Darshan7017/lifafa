<?php
include 'con.php';
$user=$_COOKIE["user"];
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
<div class="card" style="overflow: auto; height: 20rem;">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">My Order</h6>
                  <a href="orders.php" target="_blank"><h6 class="m-0 font-weight-bold text-primary">View All</h6></a>
                </div>
                <div class="table-responsive">
                  <table class="table align-items-center table-flush">
                    <thead class="thead-light">
                      <tr>
                        <th>Id</th>
                        <th>Bet</th>
                        <th>Amount</th>
                        <th>Result</th>
                        
                      </tr>
                    </thead>
                    <?php
$sql = "SELECT * FROM colordata WHERE user='$user' order by id desc limit 4";
$res = mysqli_query($conn,$sql);
while ($row = mysqli_fetch_assoc($res)){
$amo = $row['amo'];  
$resu = $row['result'];
$bet = $row['bet'];
$gameid = $row['gameid'];
?>
                    <tbody>
                      <tr>
                        <td><?= $gameid; ?></td>
                        <td><?= $bet; ?></td>
                        <td><?= $amo; ?>₹</td>
                        <td><?= $resu; ?></td>
                        
                      <?php } ?>
                      </tr>
                    </tbody>
                  </table>
                </div>
                </div>
            </div>
            </div>
          </div>
          </div>