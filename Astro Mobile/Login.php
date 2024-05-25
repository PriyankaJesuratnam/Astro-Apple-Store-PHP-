<?php session_start(); ?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Login</title>
</head>
<link rel="stylesheet" type="text/css" href="Login.css"/>
<style type="text/css"></style>
<body bgcolor="#212121">
													   
	<div class="bg-img">
    <form action="/action_page.php" class="container">
    <center><h1>LOGIN</h1></center>
		
	<div class="imgcontainer">
    <img src="Images/Members.png" alt="user" class="user" width="2%">
    </div>

    <label for="email"><b>Email</b></label>
    <input type="text" placeholder="Enter Email" name="email" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" required><br>
		<p> 
		<?php
			   if(isset($_POST["btnsubmit"]))
			   {
				$email = $_POST["email"];
				$password = $_POST["psw"];
				$valid = false;
				   
				 $con = mysqli_connect("localhost","root","","appledb");  
				   
				 if(!$con)
				{
					die("Cannot connect to DB Server");
				}
				   
			   $sql="SELECT * FROM `signin` WHERE `email`= '".$username."' AND `password`='".$username."'";
				/* $sql =  " SELECT * FROM `tbluser` WHERE `email` = '".$username."' and `password` = '".$password."'";*/
				   
				  
				   
				 $result=mysqli_query($con,$sql); 
				   
				   /*if(($username == "test@gmail.com") && ($password == "test123")) */
				
				 if(mysqli_num_rows($result) > 0)
				{ 
					$valid = true;
				}
				else
				{
					$valid = false;
				}
				
				if($valid)
				{
					$_SESSION["Email"] = $email;
					header('Location:Buy Phone.php');
				}
				else
				{
					echo "Please enter correct email & Password" ;
				}

			  }	
				
			?>
			</p>

    <button type="submit" class="btn"><a href="Buy Phone.php">Login</a></button><br><br>
		
	 
	
	<label>
    <input type="checkbox" checked="checked" name="remember"> Remember me
    </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="psw">Forgot <a href="#">password?</a></span>
		
		<center><p>Not Registred?<a href="Sign in.php">create an account</a></p></center><br>
  </form>
</div>
</form>

</body>
</html>
