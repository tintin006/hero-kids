<?php
/* Attempt MySQL server connection. */
$link = mysqli_connect("localhost", "devtest", "", "hkdaily");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Escape user inputs for security
$fName = mysqli_real_escape_string($link, $_POST['fName']);
$lName = mysqli_real_escape_string($link, $_POST['lName']);
$age = mysqli_real_escape_string($link, $_POST['age']);
 
// attempt insert query execution
$sql = "INSERT INTO hkd_kids (fName, lName, age) VALUES ('$fName', '$lName', '$age')";
if(mysqli_query($link, $sql)){
    echo "Your HEROKid has been added successfully.<br/ ><a href='parentDash.php'>Return to Dashboard</a>";
} else{
    echo "There was a problem -- I was not able to execute $sql. " . mysqli_error($link) . "<a href='parentDash.php'>Return to Dashboard</a>";
}
 
// close connection
mysqli_close($link);
?>