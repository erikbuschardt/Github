<?php
$db = mysql_connect("localhost","kunstdes_admin","EsUoB2GFg:%M8_");
if(!$db) die("Error connecting to MySQL database.");
mysql_select_db("kunstdes_SVA_01" ,$db);

if($_POST['formSubmit'] == "Submit") {
	$varVolunteer = $_POST['vol'];
	$varActivity = $_POST['act'];
	$errorMessage = "";
	echo "Submission button worked... now what?";
	
	echo $varVolunteer;
	echo $varActivity;
}

$sql3 = "INSERT INTO `kunstdes_SVA_01`.`HOURS` (`VolunteerID`, `Month`, `Hours`) VALUES ('V99', '5', '2');";
// $sql = "INSERT INTO HOURS (FirstName, LastName, Phone) VALUES ("1", "2", "3");

?>