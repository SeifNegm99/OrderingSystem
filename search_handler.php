<link rel="stylesheet" href="New.css">
<?php
include "config.php";

if (isset($_POST['submit'])){
	
	$keyword =$_POST['search'];
	
	$search = "SELECT * FROM `products` WHERE `name`='$keyword' ;" ;

	$result = mysqli_query($con,$search);
	$count = mysqli_num_rows($result);

	if($count > 0){
		$data = mysqli_fetch_assoc($result);
		
		if ($keyword=$data['name']){
			
			echo "<h1>Product is available!</h1> <br>"; 
			echo "<h2> Name: </h2> <br>" ;
			echo $data['name'];
			echo "<h2> Quantity available: </h2> <br> ";
			echo $data['quantity'];
			echo "<h2> Price per one:</h2>";
			echo $data['price'];
		}
		else{
			echo "<h1> Sorry! </h1> <br> <h2> Product is not Available!</h2> <br> ";
		}	
	}
    else{
        echo "<h1> Sorry! </h1> <br> <h2> Product is not Available!</h2> <br>";
    }
}
?>