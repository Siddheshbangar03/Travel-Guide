<?php  
	include('cont.php'); 
	// Check connection 
	global $conn;
	if ($conn==false) { 
	die("Connection failed: " . mysqli_connect_error()); 
	} 
	$name=$_POST['name'];
	$email = $_POST['email']; 
	$message=$_POST['message']; 

	$sql = "INSERT INTO contact VALUES ('$name','$email','$message')"; 
	//$mysqli->query($sql);
	if(mysqli_query($conn, $sql)){ 
		echo "Received successfully.
        You Will get Confirmation Email Shortly."; 
	} else{ 
		echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn); 
		//header("Location: index.html"); 
	} 
	mysqli_close($conn); 
?> 