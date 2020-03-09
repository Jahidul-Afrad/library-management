<?php
$conn=mysqli_connect("localhost","root","","library");
$id=$_GET['id'];
echo $id;
$sql="DELETE FROM student WHERE student_id='$id'";
mysqli_query($conn,$sql);
header("location:studentshow.php");
?>