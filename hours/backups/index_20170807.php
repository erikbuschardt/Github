<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">
<head>
<link href="https://fonts.googleapis.com/css?family=Cabin&amp;subset=latin-ext" rel="stylesheet">
<link rel="shortcut icon" href="/assets/images/icons/SVA.ico" />
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Symphony Volunteer Association - The Saint Louis Symphony Orchestra, St. Louis, Missouri, USA</title>
<style type="text/css">
	body {
		background-image: url('/assets/images/Powell_Auditorium_credit_Dan_Dreyfus_red.jpeg');
		background-size: cover;
		background-repeat: no-repeat;
		background-color: #A00;
	}
	p { 
		font-family: 'Cabin', sans-serif; 
		font-size: 250%;
		text-shadow: 2px 2px #ffffff;
		font-weight: bold;
	}
</style>
</head>

<body>

<p style="align: center; text-align: center;"><img src="STLSym_logo_CMYK.png" alt="St Louis Symphony Orchestra" 
	style="width: 50%; -webkit-filter: drop-shadow(3px 3px 3px #FFF); filter: drop-shadow(3px 3px 3px #FFF);" /></p>

<img src="cooltext252947632502234.png" style="width: 100%; -webkit-filter: drop-shadow(3px 3px 3px #AAA); filter: drop-shadow(3px 3px 3px #AAA);" />

<div style="background-color: rgba(255,255,255,0.75); width: 90%; margin: 0 auto; padding: 13px; border-radius: 26px; ">

	<!--<div style="background-color: rgba(255,255,255,0.25); margin-top: 13px;">-->

	<p>Hello and welcome to the Saint Louis Symphony Volunteer Association, (SVA).</p>
	
	<p>OUTPUT TABLE OF MEMBERS FROM MYSQL/PHP CUSTOM BUILT DATABASE</p>
	
<p><pre><?php
$servername = "localhost";
$username = "kunstdes_admin";
$password = "EsUoB2GFg:%M8_";
$dbname = "kunstdes_SVA_01";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT * FROM `MEMBERS` ORDER BY LastName ASC";

// $sql = "SELECT id, firstname, lastname FROM MyGuests";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "Vol ID #: " . $row["VolID"] . " - Name: " . $row["FirstName"] . " " . $row["LastName"] . " - Phone: " . $row["Phone"] . "<br />";
    }
} else {
    echo "0 results";
}

$sql2 = "SELECT * FROM `ACTIVITIES` ORDER BY ActID DESC";

$result2 = $conn->query($sql2);

if ($result2->num_rows > 0) {
    // output data of each row
    while($row = $result2->fetch_assoc()) {
        echo "ActID #: " . $row["ActID"] . " - Name: " . $row["ActName"] . "<br />";
    }
} else {
    echo "0 results";
}

$conn->close();

?></pre></p>
	
	

	<!--</div>-->

</div>

</body></html>

