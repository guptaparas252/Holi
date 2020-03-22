<?php
$enrollment = $_GET['Enrollment'];
?>
<?php

$link = mysqli_connect("localhost", "root", "", "users");

if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 

$sql = "DELETE FROM Students WHERE Enrollment='$enrollment'";
if(mysqli_query($link, $sql)){
    echo "Records were deleted successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// Close connection
mysqli_close($link);
?>
