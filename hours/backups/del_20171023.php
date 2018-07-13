<meta http-equiv="refresh" content="0; url=/" />
<?php

$servername = "localhost";
$username = "kunstdes_admin";
$password = "EsUoB2GFg:%M8_";
$dbname = "kunstdes_SVA_01";

if($_POST['formDelete'] == "Delete") {
	
	$varTimeStamp = '0000-00-00 00:00:00';
//	$row['TimeStamp'];

/*
	$varVolunteer = $_POST['formVolunteer'];
	$varMonth = $_POST['formMonth'];
	$varHours = $_POST['formHours'];
	$varActivity = $_POST['formActivity'];
	date_default_timezone_set('America/Chicago');
	// date_default_timezone_set('UTC');
	$varTimeStamp = date("Y-m-d H:i:s"); // Standard MySQL DATETIME type: YYYY-MM-DD HH:MM:SS.u - Microseconds (added in PHP 5.2.2).
*/
	$errorMessage = "Could not perform delete action, sorry!";

}

try {
	$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
	// set the PDO error mode to exception
	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

	$sqlDeleteEntry = "DELETE FROM `HOURS` WHERE `TimeStamp` = $varTimeStamp';
	
	// $sql = "INSERT INTO `kunstdes_SVA_01`.`HOURS` (`TimeStamp`, `VolunteerID`, `Month`, `Hours`, `Activity`) VALUES ('$varTimeStamp', '$varVolunteer', '$varMonth', '$varHours', '$varActivity')";
	
	// VALUES ('V99', '6', '2')";
	// $sql = "INSERT INTO MyGuests (firstname, lastname, email) VALUES ('John', 'Doe', 'john@example.com')";
	// use exec() because no results are returned
	$conn->exec($sqlDeleteEntry);
	// $conn->exec($sql);
	// echo "New record created successfully.  Redirecting...";
	}
catch(PDOException $e)
	{
	echo $sqlDeleteEntry . "<br />" . $e->getMessage();
	// echo $sql . "<br />" . $e->getMessage();
	}

$conn = null;

?>