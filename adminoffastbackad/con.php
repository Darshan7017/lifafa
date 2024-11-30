 <?php
// Connecting to the Database
$servername = "localhost";
$username = "fastbac1_apro";
$password = "fastbac1_apro";
$database = "fastbac1_lifafa";

// Create a connection
$conn = mysqli_connect($servername, $username, $password, $database);
// Die if connection was not successful
if (!$conn){
    die("Sorry we failed to connect: ". mysqli_connect_error());
    return;
}
else{
    $conne = true;
}

?>
