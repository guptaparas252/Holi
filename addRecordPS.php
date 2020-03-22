<?php
include_once('configPS.php');
?>
<?php
    if(isset($_POST['submit'])){
    $name = $_POST['Name'];
    $age = $_POST['Age'];
    $course = $_POST['Course'];
    $branch = $_POST['Branch'];
    $contact = $_POST['Contact'];
    $email = $_POST['Email'];
    
    $sql  = "INSERT INTO `ps` (Name, Age, Course, Branch ,Contact, Email) 
    VALUES ('$name', '$age','$course','$branch', '$contact', '$email')";
    if(mysqli_query($conn, $sql)){
        echo 'Data inserted successfully';
    }
    else{
        echo 'Data insertion failed'.mysqli_error($conn);
    }
}
else
{
    echo "Go back to input page";
}
?>
