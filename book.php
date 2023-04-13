<?php 
	include('booking.php'); 
	// Check connection 
	global $conn;
	if ($conn==false) { 
	die("Connection failed: " . mysqli_connect_error()); 
	} 
	$tour_name=$_POST['select-3'];
	$datef = $_POST['date']; 
	$datet=$_POST['date-1']; 
	$adult=$_POST['width']; 
	$child=$_POST['height']; 
	$price = $_POST['calc'];
	$name = $_POST['name-1'];
	$address = $_POST['address'];
    $contact = $_POST['int-1'];
    $econtact = $_POST['int-2'];
    $id = $_POST['text'];
    $hotel = $_POST['checkbox[]'];
    $payment = $_POST['select-2'];


	$sql = "INSERT INTO booking VALUES ('$tour_name','$datef','$datet','$adult','$child','$price','$name','$address','$contact','$econtact','$id','$hotel','$payment')"; 
	//$mysqli->query($sql);
	if(mysqli_query($conn, $sql)){ 
		echo "Book successfully.
        You Will get Confirmation Email Shortly."; 
	} else{ 
		echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn); 
		//header("Location: index.html"); 
	} 
	mysqli_close($conn); 
?> 