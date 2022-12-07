<!DOCTYPE html>
<html>
	<head>
		<title>Yellow Wood</title>
		<link rel="stylesheet" href="New.css">
		<script src= "login_validation.js"></script>
	</head>
	
	<body>
	<div class= "topnav">
		<a href="Home.php">Home</a> 
		<a href="CreateAccount.php">Register</a>
		<a href="OurProducts.php">Products</a>
		<a href="ContactUs.php">Contact Us</a>
		<!--
		<div class="dropdown"> 
			<button class="dropbtn" onclick="myFunction()">Products
			</button>
			<div class="dropdown-content" id="myDropdown">
				<a href="OurProducts.php">All Products</a>
				<a href="coasters.php">Coasters</a>
				<a href="SideTables.php">Side Tables</a>
				<a href="trays.php">Trays</a>
				<a href="Minis.php">Minis</a>
				<a href="GuestBooks.php">Guest Books</a>
				<a href="paintings.php">Paintings</a>
-->
			</div> 

			</div> 
			
		
		</div>
		<br>
		<div align="center"><img src="images/logo.png" width="400"></div>
		</div>
	   <div style="text-align:center; background-color: #16c79a; border:5px outset black; width: 300px; margin: auto">
		
		<form method="Post" name="loginForm" action="login_handler.php">

			<label>Email:</label>
			<br>
			<input type="text" name="email" placeholder="Email">
			<br>
			<label>Password:</label>
			<br>
			<input type="Password" minlength="4" name="password" placeholder="Password">
			<br>
			<input type="submit" name="submit" value="Login" /> </br>
			<input type="reset" value="Clear" onclick="clear2();" />

		</form>
	   </div>
	<div id="footer" > &copy; copyrights of yellow wood 2020 </div>
	</body>
</html>