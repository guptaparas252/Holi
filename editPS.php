<?php include('configPS.php'); ?>

<?php
$enrollment = $_GET['Enrollment'];
?>


<?php
if(isset($_POST['submit'])){
    $name = $_POST['Name'];
    $age = $_POST['Age'];
    $course = $_POST['Course'];
    $branch = $_POST['Branch'];
    $contact = $_POST['Contact'];
    $email = $_POST['Email'];
    
    $sql = "UPDATE `ps` SET Name='$name', Age='$age', 
    Course = '$course',Branch = '$branch',
    Contact='$contact', Email='$email' WHERE Enrollment='$enrollment'";
    if(mysqli_query($conn, $sql)){
        header("Location:details.php");
    }
    else{
        echo 'failed'.mysqli_error($conn);
    }
}
else{
    $sql = "SELECT * FROM `ps` WHERE Enrollment='$enrollment'";
    $result = mysqli_query($conn, $sql);
    $row = $result->fetch_assoc();
    $name = $row['Name'];
    $age = $row['Age'];
    $course = $row['Course'];
    $branch = $row['Branch'];
    $contact = $row['Contact'];
    $email = $row['Email'];
}
?>


<html>
<head><title>Update Data</title></head>

<body>
    <form action="edit.php?enrollment=<?php echo $enrollment; ?>" method="post">
      Name - <input name="name" type="text" value="<?php echo $name; ?>" placeholder="Enter Name"><br>
      Age - <input name="age" type="text" value="<?php echo $age; ?>" placeholder="Enter Age"><br>
      Course - <input name="course" type="text" value="<?php echo $course; ?>" placeholder="Enter Course"><br>
      Branch - <input name="branch" type="text" value="<?php echo $branch; ?>" placeholder="Enter Branch"><br>
      Contact - <input name="contact" type="text" value="<?php echo $contact; ?>" placeholder="Enter Contact"><br>
      EMail - <input name="email" type="email" value="<?php echo $email; ?>" placeholder="Enter E-Mail"><br>
      <input name="submit" type="submit" value="Update">
    </form>
</body>
</html>
