<?php
/* Attempt MySQL server connection. */
$link = mysqli_connect("localhost", "devtest", "", "hkdaily");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Escape user inputs for security
$taskName = mysqli_real_escape_string($link, $_POST['taskName']);
$taskDesc = mysqli_real_escape_string($link, $_POST['taskDesc']);
$taskValue = mysqli_real_escape_string($link, $_POST['taskValue']);
$taskAssignee = mysqli_real_escape_string($link, $_POST['taskAssignee']);
$taskFreq = mysqli_real_escape_string($link, $_POST['taskFreq']);
$taskCat = mysqli_real_escape_string($link, $_POST['taskCat']);
$taskIsActive = mysqli_real_escape_string($link, $_POST['taskIsActive']);
$taskIsCurrent = mysqli_real_escape_string($link, $_POST['taskIsCurrent']);
$taskExpires = mysqli_real_escape_string($link, $_POST['taskExpires']);
 
// attempt insert query execution
$sql = "INSERT INTO hkd_tasks (taskName, taskDesc, taskValue, taskAssignee, taskFreq, taskCat, taskIsActive, taskIsCurrent, taskExpires) VALUES ('$taskName', '$taskDesc', '$taskValue', '$taskAssignee', '$taskFreq', '$taskCat', '$taskIsActive', '$taskIsCurrent', '$taskExpires')";
if(mysqli_query($link, $sql)){
    echo "Your HEROKid Task has been added successfully. <br/ ><a href='parentDash.php'>Return to Dashboard</a>";
} else{
    echo "There was a problem -- I was not able to execute $sql. " . mysqli_error($link) . "<a href='parentDash.php'>Return to Dashboard</a>";
}
 
// close connection
mysqli_close($link);
?>