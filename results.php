<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<style>
	table { table-layout:fixed; }
       table td { word-wrap:break-word; }
	</style>
</head>
<body>

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

$sql = "SELECT name, email, message FROM post_data";
$result = $conn->query($sql);

echo "<div class='container' style>";
echo  "<h2>Εισερχόμενα Μηνύματα Πελατών</h2>";        
echo  "<table class='table table-bordered table-striped'>";
echo   "<thead>";
echo     "<tr>";
echo        "<th>Όνομα</th>";
echo        "<th>Email</th>";
echo       "<th>Μήνυμα</th>";
echo      "</tr>";
echo    "</thead>";
echo    "<tbody>";

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        
		echo "<tr>";
		echo "<td>". $row["name"]."</td>";
		echo "<td>". $row["email"]."</td>";
		echo "<td>". $row["message"] . "</td>";
		echo "</tr>";
    }
} else {
    echo "0 results";
}
echo "</tbody>";
echo "</table>";
echo "</div>";

$conn->close();
?> 

</body>
</html>