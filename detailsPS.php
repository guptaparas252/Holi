<?php include('configPS.php'); ?>

<html>
<head>
<title>Records</title>
</head>
<body>

<?php
$sql = "SELECT * FROM `ps`";
$result = mysqli_query($conn, $sql);

if($result->num_rows > 0){
?>   
<table border="1">
    <thead>
        <tr>
            <th>Enrollment</th>
            <th>Name</th>
            <th>Age</th>
 	    <th>Course</th>
 	    <th>Branch</th>
            <th>Contat</th>
            <th>Email</th>
            <th>Edit</th>
            <th>Delete</th>
        </tr>
    </thead>
    <tbody>
    <?php    
    while($data = $result->fetch_assoc()){ ?>
    <tr>
        <td><?php echo $data['enrollment'];?></td>
        <td><?php echo $data['name']; ?></td>
        <td><?php echo $data['age']; ?></td>
	<td><?php echo $data['course'];?></td>
	<td><?php echo $data['branch'];?></td>
        <td><?php echo $data['contact']; ?></td>
        <td><?php echo $data['email']; ?></td>
        <td> <a href="editPS.php".php?enrollment=<?php echo $data['Enrollment'];?>">Edit</a> </td>
        <td> <a href="deletePS.php".php?enrollment=<?php echo $data['Enrollment'];?>">Delete</a></td>
    </tr>
    <?php } ?>
    </tbody>
    
<?php } ?>
</table>   
</body>   
</html>

