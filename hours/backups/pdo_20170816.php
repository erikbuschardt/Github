<meta http-equiv="refresh" content="0; url=/" />
<?php

$servername = "localhost";
$username = "kunstdes_admin";
$password = "EsUoB2GFg:%M8_";
$dbname = "kunstdes_SVA_01";

if($_POST['formSubmit'] == "Submit") {
	$varVolunteer = $_POST['vol'];
	$varMonth = $_POST['month'];
	$varHours = $_POST['hrs'];
	$errorMessage = "";
}

try {
	$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
	// set the PDO error mode to exception
	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$sql = "INSERT INTO `kunstdes_SVA_01`.`HOURS` (`VolunteerID`, `Month`, `Hours`) VALUES ('$varVolunteer', '$varMonth', '$varHours')";
	// VALUES ('V99', '6', '2')";
	// $sql = "INSERT INTO MyGuests (firstname, lastname, email) VALUES ('John', 'Doe', 'john@example.com')";
	// use exec() because no results are returned
	$conn->exec($sql);
	echo "New record created successfully.  Redirecting...";
	}
catch(PDOException $e)
	{
	echo $sql . "<br />" . $e->getMessage();
	}

$conn = null;

?>