<?php
/* Attempt MySQL server connection. */
$link = mysqli_connect("localhost", "devtest", "", "hkdaily");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Attempt select query execution
$whichKid = $_GET["k"]; // Determine which kid for whom to pull the checklist.

echo "<p>Hello, " . $whichKid . "! Here are your current tasks:</p>";
$sql = "SELECT * FROM hkd_tasks WHERE taskAssignee='$whichKid'";
if($result = mysqli_query($link, $sql)){
    if(mysqli_num_rows($result) > 0){
      echo "<div class = 'control-group'>";  
		echo "<table>";
            echo "<tr>";
                echo "<th>Done?</th>";
				echo "<th>Your Task</th>";
                echo "<th>Point Value</th>";
                echo "<th>Description</th>";
            echo "</tr>";
        while($row = mysqli_fetch_array($result)){
            echo "<tr>";
                echo "<td>" . "<input type='checkbox' name='check'/></td>";
				echo "<td>" . $row['taskName'] . "</td>";
                echo "<td>" . $row['taskValue'] . "</td>";
                echo "<td>" . $row['taskDesc'] . "</td>";
            echo "</tr>";
		echo "</div>";
        }
        echo "</table>";
        // Close result set
        mysqli_free_result($result);
    } else{
        echo "There are currently no tasks assigned to you. Read a book!";
    }
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// Close connection
mysqli_close($link);
?>