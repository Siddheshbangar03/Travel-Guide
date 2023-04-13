<?php
$server_name="localhost";
$username="root";
$password="";
$database="newsletter";
$conn=mysqli_connect($server_name,$username,$password,$database);

global $conn;
	if ($conn==false) { 
	die("Connection failed: " . mysqli_connect_error()); 
	} 
	$email=$_POST['email']; 

	$sql = "INSERT INTO newsletter VALUES ('$email')"; 
	//$mysqli->query($sql);
	if(mysqli_query($conn, $sql)){ 
		echo "Records inserted successfully."; 
	} else{ 
		echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn); 
		//header("Location: index.html"); 
	} 
	mysqli_close($conn); 
?>