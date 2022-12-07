<link rel="stylesheet" href="New.css">
<?php

include "config.php";

if (isset($_POST['submit'])){
	$name = mysqli_real_escape_string($con,$_POST["name"] );
    $number = mysqli_real_escape_string($con,$_POST["number"] );
	$email = mysqli_real_escape_string($con,$_POST["email"]);
	$address = mysqli_real_escape_string($con,$_POST["address"]);
	$product = mysqli_real_escape_string($con,$_POST['product']);
    $comments = mysqli_real_escape_string($con,$_POST["comments"] );


	$createOrder = "INSERT INTO `orders`(`name`, `number`, `email`, `address`, `comments`, `product`) 
    VALUES ('$name','$number','$email','$address','$comments','$product')";
	mysqli_query($con,$createOrder);
	
    echo "<h1> Order is successfully submitted, Thank You! </h1>";
}

?>