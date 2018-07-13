<meta http-equiv="refresh" content="0; url=/" />
<?php

$servername = "localhost";
$username = "kunstdes_admin";
$password = "EsUoB2GFg:%M8_";
$dbname = "kunstdes_SVA_01";

if($_POST['formSubmit'] == "Submit") {
	$varVolunteer = $_POST['formVolunteer'];
	$varMonth = $_POST['formMonth'];
	$varHours = $_POST['formHours'];
	$varActivity = $_POST['formActivity'];
	date_default_timezone_set('America/Chicago');
	// date_default_timezone_set('UTC');
	$varTimeStamp = date("Y-m-d H:i:s"); // Standard MySQL DATETIME type: YYYY-MM-DD HH:MM:SS.u - Microseconds (added in PHP 5.2.2).
	$errorMessage = "";
}

try {
	$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
	// set the PDO error mode to exception
	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

	/*
	$sql = "INSERT INTO `kunstdes_SVA_01`.`HOURS` (`VolunteerID`, `Month`, `Hours`, `Activity`) VALUES (".
		PrepSQL($varVolunteer) . ", " .
		PrepSQL($varMonth) . ", " .
		PrepSQL($varHours) . ", " .
		PrepSQL($varActivity) . ")";

	function PrepSQL($value) {
		// Stripslashes
		if(get_magic_quotes_gpc()) {
			$value = stripslashes($value);
		}
		// Quote
		$value = "'" . mysql_real_escape_string($value) . "'";
		return($value);
	}
	*/
	
	$sql = "INSERT INTO `kunstdes_SVA_01`.`HOURS` (`TimeStamp`, `VolunteerID`, `Month`, `Hours`, `Activity`) VALUES ('$varTimeStamp', '$varVolunteer', '$varMonth', '$varHours', '$varActivity')";
	
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