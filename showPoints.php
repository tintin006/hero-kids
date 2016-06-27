<?php
/* Attempt MySQL server connection. */
$link = mysqli_connect("localhost", "devtest", "", "hkdaily");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Attempt select query execution
$whichKid = $_GET["k"]; // Determine whose points we're grabbing from the db
$totalPoints = 250;
echo "<p>" . $whichKid . ", you have earned  " . $totalPoints . " POINTS!</p>";

 
// Close connection
mysqli_close($link);
?>