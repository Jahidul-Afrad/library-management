<?php
    $conn=mysqli_connect("localhost","root","","library");
	$id=$_POST['id'];
	$fname=$_POST['fname'];
	$lname=$_POST['lname'];
	$email=$_POST['email'];
	$department=$_POST['dept'];
	$address=$_POST['address'];
	$gender=$_POST['gender'];
	$pass=$_POST['password'];
	$sql="INSERT INTO student(student_id,student_firstname,student_lastname,student_email,student_department,student_address,gender,password)
	VALUES ('$id','$fname','$lname','$email','$department','$address','$gender','$pass')";
	if(mysqli_query($conn,$sql)){
	echo "<script>alert('Successfully register your account');location.href='registration.php'</script>";
}
else{
	echo "<script>alert('There is an error to access database');location.href='registration.php'</script>";
}
?>