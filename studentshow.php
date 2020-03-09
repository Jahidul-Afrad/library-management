<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="studenttable.css">
</head>
<body>
<table>
<tr>
<th>Donar ID</th>
<th>Donar FirstName</th>
<th>Donar LastName</th>
<th>Donar Email</th>
<th>Donar Religion</th>
<th>Donar Address</th>
<th>Gender</th>
<th>Password</th>
<th colspan="2">Option</th>
</tr>
 <?php
	    $conn=mysqli_connect("localhost","root","","library");
	    $sql="SELECT * FROM student";
		$result=mysqli_query($conn,$sql);
		while($row=mysqli_fetch_assoc($result)){
		?>
		    <tr>
			<td><?php echo $row['student_id'];?></td>
	        <td><?php echo $row['student_firstname'];?></td>
	        <td><?php echo $row['student_lastname'];?></td>
	        <td><?php echo $row['student_email'];?></td>
			<td><?php echo $row['student_department'];?></td>
			<td><?php echo $row['student_address'];?></td>
			<td><?php echo $row['gender'];?></td>
			<td><?php echo $row['password'];?></td>
			<td><a href="sdelete.php?id=<?php echo $row['student_id'];?>"  style="text-decoration:none">Delete</a></td>
			<td><a href="edit.php?id=<?php echo $row['book_id'];?>" style="text-decoration:none">Edit</a></td>
			</tr>
		<?php	
		}
	 ?>
</table>
</body>
</html>