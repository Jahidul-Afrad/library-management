<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="registration.css">
</head>
<body>
<h1>Provide your information</h1>
<form method="post" action="insert.php">
  <div class="T">
    <div class="t">Student_id : </div>
	   <div class="tt">
	      <input type="number" name="id"> 
	   </div>
	   <div style="clear:both"></div>
	   <div class="t">Student_firstname : </div>
	   <div class="tt">
	      <input type="text" name="fname"> 
	   </div>
	   <div style="clear:both"></div>
	   <div class="t">Student_lastname : </div>
	   <div class="tt">
	      <input type="text" name="lname"> 
	   </div>
	   <div style="clear:both"></div>
	   <div class="t">Student_Email : </div>
	   <div class="tt">
	      <input type="text" name="email"> 
	   </div>
	   <div style="clear:both"></div>
	   <div class="t">Donar_Religion : </div>
	   <div class="tt">
	      <input type="text" name="dept"> 
	   </div>
	   <div style="clear:both"></div>
	   <div class="t">Student_Address : </div>
	   <div class="tt">
	      <input type="text" name="address"> 
	   </div>
	   <div style="clear:both"></div>
	   <div class="t"><p>Gender : </p></div>
      <div class="tt">
          <input type="radio" name="gender" value="male" checked>Male</br>
	      <input type="radio" name="gender" value="female">Female</br>
	      <input type="radio" name="gender" value="other">Other
    </div>
    <div style="clear:both"></div>
	   <div class="t">Password : </div>
	   <div class="tt">
	      <input type="password" name="password"> 
	   </div>
	   <div style="clear:both"></div>
	   <div class="r">
          <input type="submit" value="submit">
    </div>
  </div>
</form>
</body>
</html>