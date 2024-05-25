<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Order Form</title>
</head>
	
<link rel="stylesheet" type="text/css" href="Order Here.css"/>
<style type="text/css"></style>
	
<body bgcolor="#000000">
	<div class="bg-img">
    <form action="/action_page.php" class="container">
    <center><h1><p2>PLACE YOUR ORDER HERE</p2></h1></center>
	
	<label for="FN"><p1><b>First Name</b></p1></label>
    <input type="text" placeholder="Enter your First Name" name="First Name" required>
		
	<label for="LN"><p1><b>Last Name</b></p1></label>
    <input type="text" placeholder="Enter your Last Name" name="Last Name" required>
		
	<label for="email"><p1><b>Email</b></p1></label>
    <input type="text" placeholder="Enter Email" name="email" required>

	<label for="CA"><p1><b>Contact Number</b></p1></label>
    <input type="text" placeholder="Enter your Contact Number" name="Contact Number<" required>
	
	<label for="DA"><p1><b>Delivery Address</b></p1></label>
    <input type="text" placeholder="Enter your Contact Number" name="Contact Number<" required>
	
	<label for="zip"><p1><b>Zip code</b></p1></label>
    <input type="text" placeholder="Enter your Contact Number" name="Contact Number<" required>

		<label for="Payment"><p1><b>Payment Type</b></p1></label>
		
		<input type="radio" id="card" name="Card Payment" value="CARD PAYMENT">
		<label for="html"><p1>CARD PAYMENT</p1></label>
		<input type="radio" id="card" name="Card Payment" value="CARD PAYMENT">
		<label for="html"><p1>CASH ON DELIVERY</p1></label><br><br>
		
    <button type="submit" class="btn"><a href="Last.html">CONFIRM YOUR ORDER</a></button><br><br>
		
	  </form>
</div>
</form>

</body>
</html>