<link rel="stylesheet" href="New.css">
<?php
//DATABASE CONNECTION
include "config.php";

//IF USER PRESSES THE SUBMIT BUTTON, THE FOLLOWING CODE IS EXECUTED
if (isset($_POST['submit'])){
	
	//CREATE STRING VARIABLES FOR EMAIL AND PASSWORD
	//GET EMAIL AND PASSWORD FROM THE HTML FORM BY POST METHOD AND STORE IT IN THE VARIABLES.
	$email =$_POST['email'];
	
	//USE ESCAPE FUNCTION TO PREVENT SQL INJECTION
	$password = mysqli_real_escape_string( $con,$_POST['password']);
	
	$login = "SELECT * FROM `users` WHERE `email`='$email' ;" ;

	$result = mysqli_query($con,$login);
	$count = mysqli_num_rows($result);

	if($count > 0){
		$data = mysqli_fetch_assoc($result);
		
		if (password_verify($password,$data['pwd'])){
			
			echo "<h1>Logged in Successfully</h1> <br>"; 
			echo "<h2> First Name:  </h2> <br>" ;
			echo $data['firstname'];
			echo "<h2> Last Name: </h2> <br> ";
			echo $data['lastname'];
			echo "<h2> Email:</h2>";
			echo $data['email'];
		}
		else{
			echo "Invalid Email and Password 1";
		}
		
	} else {
	echo "Invalid Email and Password 2";
	}	
}
?>