<?php
    $conn=mysqli_connect("localhost","root","","library");
	$id=$_POST['id'];
	$bname=$_POST['fname'];
	$aname=$_POST['lname'];
	$brack=$_POST['email'];
	$issudate=$_POST['address'];
	$issuexpair=$_POST['password'];
	$studentid=$_POST['refadmin'];
	$sql="INSERT INTO book(`book_id`, `book_name`, `book_author`, `book_rack`, `issue_data`, `issue_expair`, `student_id`)
	VALUES ('$id','$bname','$aname','$brack','$issudate','$issuexpair','$studentid')";
					     if(mysqli_query($conn,$sql)){
	                        echo "<script>alert('Successfully register your account');location.href='book.php'</script>";
	                }
	           // }
else{
	echo "<script>alert('There is an error to access database');location.href='home.php'</script>";
}
?>