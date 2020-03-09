<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="btable.css">
</head>
<body>
<table>
<tr>
<th>Book ID</th>
<th>Book Name</th>
<th>Book Author</th>
<th>Book Rack</th>
<th>Issue Date</th>
<th>Issue Expire</th>
<th>Student ID</th>
<th colspan="2">Option</th>
</tr>
 <?php
	    $conn=mysqli_connect("localhost","root","","library");
	    $sql="SELECT * FROM book";
		$result=mysqli_query($conn,$sql);
		while($row=mysqli_fetch_assoc($result)){
		?>
		    <tr>
			<td><?php echo $row['book_id'];?></td>
	        <td><?php echo $row['book_name'];?></td>
	        <td><?php echo $row['book_author'];?></td>
	        <td><?php echo $row['book_rack'];?></td>
			<td><?php echo $row['issue_data'];?></td>
			<td><?php echo $row['issue_expair'];?></td>
			<td><?php echo $row['student_id'];?></td>
			<td><a href="bdelete.php?id=<?php echo $row['book_id'];?>"  style="text-decoration:none">Delete</a></td>
			<td><a href="edit.php?id=<?php echo $row['book_id'];?>" style="text-decoration:none">Edit</a></td>
			</tr>
		<?php	
		}
	 ?>
</table>
</body>
</html>