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
	pre {
		font-size: 200%;
		text-shadow: 1px 1px #ffffff;
		font-weight: bold;
	}
	.btn {
		border: 3px solid #111;
		border-radius: 26px;
		padding: 13px;
		background: linear-gradient(#C00, #900); /* Standard syntax */
		color: #EEE;
		font-family: 'Cabin', sans-serif; 
		font-size: 250%;
		text-shadow: 3px 3px #111;
		font-weight: bold;
		text-decoration: none;
		box-shadow: 3px 3px 3px #888;
		margin-right: 13px;
	}
	.btn:hover {
		background: linear-gradient(#F00, #C00); /* Standard syntax */
		color: #FFF;
		text-decoration: underline;
		border: 3px solid #000;
		text-shadow: 3px 3px #111;	
	}
	input, select, option {
		font-family: Courier New;
		font-weight: bold;
		/*font-size: 100%;*/
	}
</style>
</head>

<body>

<p style="align: center; text-align: center;"><img src="SVA.png" alt="St Louis Symphony Volunteer Association" 
	style="width: 65%; -webkit-filter: drop-shadow(0px 0px 5px #FFF); filter: drop-shadow(0px 0px 5px #FFF);" /></p>

<!--<img src="cooltext252947632502234.png" style="width: 100%; -webkit-filter: drop-shadow(3px 3px 3px #AAA); filter: drop-shadow(3px 3px 3px #AAA);" />-->

<div style="background-color: rgba(255,255,255,0.75); width: 90%; margin: 0 auto; padding: 13px; border-radius: 26px; text-align: center; align: center;">

	<!--<div style="background-color: rgba(255,255,255,0.25); margin-top: 13px;">-->

	<p>SVA MEMBERSHIP DATABASE</p>

	<!--<p>Hello and welcome to the St. Louis Symphony Volunteer Association, (SVA).</p>-->
	
	<!--<p>MEMBERSHIP DATABASE</p>-->
	
	<!--<p>OUTPUT TABLE OF MEMBERS FROM MYSQL/PHP CUSTOM BUILT DATABASE</p>-->

<a class="btn" href="#">Enter Hours</a>
<a class="btn" href="#">Reporting</a>
	
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

	echo "<form action='mailto:erik@kunstdesigns.com' method='post'>";

	// echo "<p>ACTIVITIES</p>";

$sql2 = "SELECT * FROM `ACTIVITIES` ORDER BY ActID DESC";

$result2 = $conn->query($sql2);

if ($result2->num_rows > 0) {
    // output data of each row
    
    	echo "Select Activity: <select name='act'>";
    	echo "<option value='0'>Select One...</option>";
    
    while($row = $result2->fetch_assoc()) {
	echo "<option style='text-transform: uppercase;' value='" . $row["ActID"] . "'>" . $row["ActName"] . "</option>";
	// echo "ActID #: " . $row["ActID"] . " - Name: " . $row["ActName"] . "<br />";
    }
    
    echo "</select><br />";
    
} else {
    echo "0 results";
}

	echo "Select Month: <select name='month'><option value='0'>Select One...</option><option value='161707'>July 2017</option></select><br />";

	// echo "<p>MEMBERS</p>";

$sql = "SELECT * FROM `MEMBERS` ORDER BY LastName ASC";

// $sql = "SELECT id, firstname, lastname FROM MyGuests";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row

	echo "Select Volunteer: <select name='vol'>";
	echo "<option value='0'>Select One...</option>";

    while($row = $result->fetch_assoc()) {

	echo "<option style='text-transform: uppercase;' value='" . $row["VolID"] . "'>" . $row["LastName"] . ", " . $row["FirstName"] . "</option>";
	// echo "Vol ID #: " . $row["VolID"] . " - Name: " . $row["LastName"] . ", " . $row["FirstName"] . " - Phone: " . $row["Phone"] . "<br />";
	// echo "<option value='audi'>Audi</option>";

    }

	       echo "</select><br />"; 

} else {
    echo "0 results";
}

$conn->close();

	echo "Enter Hours: <input type='text' name='hrs' size='5'><input type='submit'></form>";

?></pre></p>
	
	<!--</div>-->

</div>

</body></html>

