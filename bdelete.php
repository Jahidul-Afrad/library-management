<?php
$conn=mysqli_connect("localhost","root","","library");
$id=$_GET['id'];
echo $id;
$sql="DELETE FROM book WHERE book_id='$id'";
mysqli_query($conn,$sql);
header("location:bshow.php");
?>