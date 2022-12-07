<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Yellow Wood</title>
		<link rel="stylesheet" href="New.css">
		<script src="Javascript.js"></script>
</head>
<body>
<h1 style="text-align:center"> New Order</h1>
		<div class= "topnav">
        <a href="Home.php">Home</a>
		<a href="CreateAccount.php">Register</a>
		<a href="login.php">Login</a>
		<a href="OurProducts.php"> Products </a>
		<a href="ContactUs.php">Contact Us</a>
			</div> 
		</div>
    <div align="center"><img src="images/logo.png" width="400"></div>
    </br>
<div style="text-align:center;" >
<p> 
        Notice! <br>
        Orders will be delivered around 5-10 working days!</br>
        Payment is in cash on door!
        </p> </div>
<div style="text-align:center; background-color: #16c79a; border:5px outset black; width: 900px; height: 600px ; margin: auto">
			<form action="order_handler.php" method="post" name="orderForm" >
				<p></p>
                <label> Full Name: </label></br>
				<input type="text" minlength="3" name="name" ></br>
				<label> Phone Number: </label></br>
				<input type="number" minlength="11" name="number"></br>
				<label> Email: </label></br>
				<input type="email" name="email"></br>
                <label> Full Address: </label></br>
				<input style="width: 200px; height:100px" type="text"  minlength="5" name="address" ></br>
                <label> Product: </label>
				<select id="product" name="product"> 
                    <option name="table" value="table"> Table </option>    
                    <option name="coasters" value="coasters"> 4 Sets of Coasters </option>
                    <option name="minis" value="minis"> 100 pieces of Minis</option>
                </select></br>
                <label> Any Additional Comments:  </label></br>
				<input style="width: 700px; height: 200px" type="text" name="comments" ></br>
				<input type="Submit" name="submit" value="Make Order"> </br>
				<input type="reset" value="Clear" onclick="clear2();" />
			</form>
	   </div>
</body>
</html>