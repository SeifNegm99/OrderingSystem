<link rel="stylesheet" href="New.css">
<?php

include "config.php";


if (isset($_POST['submit'])){
	$firstName = mysqli_real_escape_string($con,$_POST["firstName"] );
	$lastName = mysqli_real_escape_string($con,$_POST["lastName"]);
	$email = mysqli_real_escape_string($con,$_POST["email"]);
	$password = mysqli_real_escape_string($con,$_POST["password"]);
	$Vpassword = mysqli_real_escape_string($con,$_POST['Vpassword']);
	if($password != $Vpassword){
		echo 'Password does not MATCH!';
	}
	else{
		$hash= password_hash($password,PASSWORD_BCRYPT);
		$insertUser = "INSERT INTO `users`(`firstname`, `lastname`, `email`, `pwd`) VALUES 
		('$firstName','$lastName','$email','$hash');";
		mysqli_query($con,$insertUser);
		echo "Registered Successfully!";
		echo "<h1>User Created Successfully</h1>";
		echo "<a href='login.php'>Click here to login</a>";
	}
}
?>