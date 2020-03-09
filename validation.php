<?php
$conn=mysqli_connect("localhost","root","","library");
$email=$_POST['email'];
$password=$_POST['pass'];
$id=$_POST['id'];
$sql="SELECT * FROM librarian WHERE librarian_id='$id' LIMIT=1";
$result=mysqli_query($conn,$sql);				
$sql="SELECT admin_firstname FROM librarian WHERE admin_id='$id' LIMIT 1"; 
//$sql="SELECT first_name FROM user WHERE email_address='$email' AND password='$password' LIMIT 1";
$result=mysqli_query($conn,$sql);
                if(mysqli_num_rows($result)==1){
					$row=mysqli_fetch_array($result);
					if(isset($_POST['rem'])){
				      setcookie("nam",$row['admin_firstname'],time()+86400);
					  setcookie("emal",$_POST['email'],time()+86400);
					}
					echo "<script>alert('Login successful!!');location.href='admin.php'</script>";
					
				}
				else{
					echo "<script>alert('Email address and password combination is incorrect!!')location.href='adlogin.php';</script>";
				}
?>