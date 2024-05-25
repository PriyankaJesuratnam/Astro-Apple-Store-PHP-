<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Sign in</title>
</head>
<link rel="stylesheet" type="text/css" href="Sign in.css"/>
<style type="text/css"></style>
<body bgcolor="#EDEEF3">
													   
	<div class="bg-img">
    <form action="/action_page.php" class="container">
    <center><h1><p1>REGISTER HERE</p1></h1></center>
	
	<label for="email"><b>First Name</b></label>
    <input type="text" placeholder="Enter your First Name" name="First Name" required>
		
	<label for="email"><b>Last Name</b></label>
    <input type="text" placeholder="Enter your Last Name" name="Last Name" required>
		
	<label for="email"><b>User Name</b></label>
    <input type="text" placeholder="Enter your user name<" name="username" required>
		
	<label for="email"><b>Email</b></label>
    <input type="text" placeholder="Enter Email" name="email" required>

	<label for="email"><b>Contact Number</b></label>
    <input type="text" placeholder="Enter your Contact Number" name="Contact Number" required>
		
	<label for="psw"><b>Password</b></label>
    <input type="password" name="txtpassword" id="txtpassword" pattern="[0-9]{6}" placeholder="Enter the 6 DigitNumbers"/><br>
		
	<label for="email"><b>Confirm Password</b></label>
    <input type="password" name="txtCconfirmpassword" id="txtCconfirmpassword">

	
    <button type="submit" class="btn" id="btn"><a href="Login.php">Register</a></button><br><br>
		
	  </form>
</div>

</body>
<?php
	
	  if(isset($_POST["btnsubmit"]))
			   {
		 
		 $firstname= $_POST["First Name"];
		  $lastname= $_POST["Last Name"];
		  $username= $_POST["username"];
		  $email= $_POST["email"];
		  $contactno= $_POST["Contact Number"];
		  $password= $_POST["psw"];
		 
		  
		 $con = mysqli_connect("localhost","root","","appledb"); 
				   
				if(!$con)
				{
					die("Cannot connect to DB Server");
				}
		 
		 
				$sql="INSERT INTO `sign in` (`FirstName`, `LastName`, `UserName`, `Email`, `ContactNo`, `Password`, `ConfirmPassword`) VALUES ('".$firstname."', '".$lastname."', '".$username."', '".$email."', '".$contactno."', '".$password."');";
		 
		 mysqli_query($con,$sql);
		 
		 header('Location:Login.php');
		   
	
	 }
	
	
	?>

</html>
