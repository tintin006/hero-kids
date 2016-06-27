<?php
/* Attempt MySQL server connection. */
$link = mysqli_connect("localhost", "devtest", "", "hkdaily");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Attempt select query execution
$whichKid = $_GET["k"]; // Determine whose badges we are going to display
$totalBadges = 0;
echo "<p>" . $whichKid . ", you have earned  " . $totalBadges . " BADGES.</p>";
 
// Close connection
mysqli_close($link);
?>