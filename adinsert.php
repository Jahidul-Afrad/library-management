<?php
    $conn=mysqli_connect("localhost","root","","library");
	$id=$_POST['id'];
	$fname=$_POST['fname'];
	$lname=$_POST['lname'];
	$email=$_POST['email'];
	$readmin=$_POST['refadmin'];
	$readminpass=$_POST['refadminpass'];
	$address=$_POST['address'];
	$gender=$_POST['gender'];
	$pass=$_POST['password'];
	$sql="INSERT INTO `librarian`(`admin_id`, `admin_firstname`, `admin_lastname`, `admin_email`, `admin_address`, `gender`, `password`, `refdmin`, `refadminemail`)
	VALUES ('$id','$fname','$lname','$email','$address','$gender','$pass','$readmin','$readminpass')";
	//$sq="SELECT  admin_email FROM librarian WHERE admin_id='$id' LIMIT 1"; 
    //$result=mysqli_query($conn,$sq);
               // if(mysqli_num_rows($result)==1){
					//$row=mysqli_fetch_array($result);
				   //if($row['admin_email']==$pass){
					     if(mysqli_query($conn,$sql)){
	                        echo "<script>alert('Successfully register your account');location.href='adregistration.php'</script>";
	                }
	           // }
else{
	echo "<script>alert('There is an error to access database');location.href='adregistration.php'</script>";
}
?>