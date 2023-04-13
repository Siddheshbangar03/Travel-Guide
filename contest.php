<?php 
	include('conn1.php'); 
	// Check connection 
	global $conn;
	if ($conn==false) { 
	die("Connection failed: " . mysqli_connect_error()); 
	} 
	$first_name=$_POST['first_name'];
	$middle_name = $_POST['middle_name']; 
	$last_name=$_POST['last_name']; 
	$email=$_POST['email']; 
	$mobile=$_POST['mobile']; 
	$visit = $_POST['visit'];
	$gender = $_POST['gender'];
	$feedback = $_POST['feedback'];

	$sql = "INSERT INTO contest VALUES ('$first_name','$middle_name','$last_name','$email','$mobile','$visit','$gender','$feedback')"; 
	//$mysqli->query($sql);
	if(mysqli_query($conn, $sql)){ 
		echo "Records inserted successfully."; 
	} else{ 
		echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn); 
		//header("Location: index.html"); 
	} 
	mysqli_close($conn); 
?> 