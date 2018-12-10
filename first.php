<!--<!DOCTYPE>
<html>
<head>
	<title>WDA</title>
</head>
	
<body>
	

</body>

</html> -->


<?php


	$servername = "localhost";
	$username = "kongat";
	$password = "123qaz!@#";
	$dbname = "test_1";

	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);
	// Check connection
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	} 

	$sql = "INSERT INTO post_data (name, email, message)
	VALUES ('".$_POST["fname"]."', '".$_POST["femail"]."', '".$_POST["fmessage"]."')";

	if ($conn->query($sql) === TRUE) {
		echo "New record created successfully";
	} else {
		echo "Error: " . $sql . "<br>" . $conn->error;
	}

	$conn->close();

?>







