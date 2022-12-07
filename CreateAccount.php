<!DOCTYPE html>
<html>
	<head>
		<title>Yellow Wood</title>
		<link rel="stylesheet" href="New.css">
		<script src="reg_validation.js"></script>
	</head>
	
	<body>
		<div class= "topnav">
		<a href="Home.php">Home</a> 
		<a href="Reviews.php"> Reviews</a>
		<a href="login.php">Login</a>
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
			<form action="register_handler.php" method="post" name="regForm" >
				<label> First Name: </label></br>
				<input type="text" minlength="3" name="firstName" ></br>
				<label> Last Name: </label></br>
				<input type="text" minlength="3" name="lastName"></br>
				<label> Email: </label></br>
				<input type="text" name="email"></br>
				<label> Passowrd: </label></br>
				<input type="password" minlength="5" name="password" ></br>	
				<label> Verify Passowrd: </label></br>
				<input type="password" minlength="5" name="Vpassword" ></br>				
				<input type="Submit" name="submit" value="Create Account"> </br>
				<input type="reset" value="Clear" onclick="clear2();" />
			</form>
	   </div>
	<div id="footer" > &copy; copyrights of yellow wood 2020 </div>
	</body>
</html>