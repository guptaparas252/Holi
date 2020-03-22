<?php
$hostName = 'localhost';
$userName = 'root';
$password = '';
$databaseName = 'users';
    
$conn = mysqli_connect($hostName, $userName, $password, $databaseName);   
if ($conn){
echo "Connected";
}
else{
    echo mysqli_connect_error();
}
?>

