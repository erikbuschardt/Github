<!DOCTYPE html>
<html lang="en">
<head>
<title>Symphony Volunteer Association - Membership Hours Database</title>
<!--<title>SVA Full Slice And Dice Report</title>-->
<meta charset="utf-8">
<meta http-equiv="refresh" content="300">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<link rel="shortcut icon" href="/assets/images/icons/SVA.ico" />
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" 
	href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

        <link rel="stylesheet" href="BootstrapSelect-master/css/bootstrap/bootstrap.min.css">
        <script src="BootstrapSelect-master/js/vendor/modernizr-2.8.3.min.js"></script>
        
<style>

@import url('https://fonts.googleapis.com/css?family=Source+Code+Pro|PT+Mono');

body { 
	background-image: url('/assets/images/Powell_Auditorium_credit_Dan_Dreyfus_bw.jpeg');
	background-size: 100%;
	background-repeat: no-repeat;
	background-position: center top; 
	background-color: rgba(210,210,210,1.0); 
/*
	background-image: url('/assets/images/Powell_Auditorium_credit_Dan_Dreyfus_red.jpeg');
	background-color: rgba(170,0,0,1.0); 
	opacity:0.5;
*/
	font-family: 'Source Code Pro', 'PT Mono', monospace; 
}

/* table { border: 1px solid #000; } */

table tr th { /* background: #EEE; */ 
	border-bottom: 1px solid #000; }

table tr th, table tr td { 
	/*
	padding: 5px; margin: 2px; 
	*/
	text-align: center; align: center; }

table tr td { border: 0px solid #AAA; }

/* .rowA tr:hover { background-color: #ff9999; } */

@media only screen and (min-width: 1000px) { /* min-width: 768px - tablets and desktop */
	#TrebleClef, #BassClef { background-color: #500; width: 100%; height: 5px; }
	/* body { font-size: 100%; } */
	#HoursLedger { display: block; }
	.editionDesktopLaptop { display: block; } .editionTablet { display: none; } .editionMobile { display: none; }
	.formTable { width: 50%; float: left; }
}

@media only screen and (min-width: 668px) and (max-width: 999px) { /* (max-width: 767px) and (orientation: portrait) - portrait phones */
	#TrebleClef, #BassClef { background-color: #050; width: 100%; height: 5px; }
	/* body { font-size: 125%; } */
	#HoursLedger { display: block; }
	.editionDesktopLaptop { display: none; } .editionTablet { display: block; } .editionMobile { display: none; }
	.formTable { width: 100%; }
}

@media only screen and (max-width: 667px) { /* max-width: 767px - phones */
	#TrebleClef, #BassClef { background-color: #005; width: 100%; height: 5px; }
	/* body { font-size: 150%; } */
	#HoursLedger { display: none; }
	.editionDesktopLaptop { display: none; } .editionTablet { display: none; } .editionMobile { display: block; }
	.formTable { width: 100%; }
}

</style>

</head>
<body>

<div class="container">

<p style="align: center; text-align: center; padding-top: 26px;"><img src="SVA.png" alt="St Louis Symphony Volunteer Association" 
	style="width: 65%; -webkit-filter: drop-shadow(5px 5px 5px #FFF); filter: drop-shadow(5px 5px 5px #FFF);" /></p>

	<p style="align: center; text-align: center; font-weight: bold;">SVA MEMBERSHIP HOURS DATABASE</p>
	
	<p style="align: center; text-align: center; font-weight: bold;" class="editionDesktopLaptop">DESKTOP / LAPTOP EDITION</p>

	<p style="align: center; text-align: center; font-weight: bold;" class="editionTablet">TABLET EDITION</p>

	<p style="align: center; text-align: center; font-weight: bold;" class="editionMobile">MOBILE EDITION</p>
	
	<div id="TrebleClef"></div>	
		
<?php include("enter.php"); ?>

<div style="float: right;">Hola!! I am new content.  The results of the database.</div>

<?php include("report.php"); ?>

<div class="table-responsive">
	<table class="table table-striped table-bordered table-hover table-condensed">
	<tr>
		<th>COMMITTEE&nbsp;NAME</th>
		<th>1718-09</th>
		<th>1718-10</th>
		<th>1718-11</th>
		<th>1718-12</th>
		<th>1718-01</th>
		<th>1718-02</th>
		<th>1718-03</th>
		<th>1718-04</th>
		<th>1718-05</th>
		<th>1718-06</th>
		<th>1718-07</th>
		<th>1718-08</th>
	</tr>
	
<?php
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

// echo "ACTIVITIES table dump<br /><br />";

$queryListActivitiesA = "SELECT * FROM `ACTIVITIES` WHERE `ActID` LIKE 'A%' ORDER BY ActID ASC";
$inputListActivitiesA = $conn->query($queryListActivitiesA);
if ($inputListActivitiesA->num_rows > 0) {
	while($row = $inputListActivitiesA->fetch_assoc()) {
		echo "<tr class=\"rowA\">";
		echo "<td style='width: 100px;'><!--<p>-->" . $row['ActName'] . "<!--</p>--></td>";
		
		// for ($i = 0; i <= 12; i++) {
		echo "<td>(0) 0</td><td>(0) 0</td><td>(0) 0</td><td>(0) 0</td><td>(0) 0</td><td>(0) 0</td><td>(0) 0</td><td>(0) 0</td><td>(0) 0</td><td>(0) 0</td><td>(0) 0</td><td>(0) 0</td>";
		// }
		
		echo "</tr>";
		// echo $row["ActID"] . " - " . $row["ActName"] . "<br />";
    }
} else {
    echo "0 results";
}

echo "<tr style=\"background-color: #FFAAAA;\"><td>Total A</td></tr>";


$queryListActivitiesB = "SELECT * FROM `ACTIVITIES` WHERE `ActID` LIKE 'B%' ORDER BY ActID ASC";
$inputListActivitiesB = $conn->query($queryListActivitiesB);
if ($inputListActivitiesB->num_rows > 0) {
	while($row = $inputListActivitiesB->fetch_assoc()) {
		echo "<tr>";
		echo "<td><!--<p>-->" . $row['ActName'] . "<!--</p>--></td>";
		
		// for ($i = 0; i <= 12; i++) {
		echo "<td>(0) 0</td><td>(0) 0</td><td>(0) 0</td><td>(0) 0</td><td>(0) 0</td><td>(0) 0</td><td>(0) 0</td><td>(0) 0</td><td>(0) 0</td><td>(0) 0</td><td>(0) 0</td><td>(0) 0</td>";
		// }
		
		echo "</tr>";
		// echo $row["ActID"] . " - " . $row["ActName"] . "<br />";
    }
} else {
    echo "0 results";
}

echo "<tr style=\"background-color: #AAAAFF;\"><td>Total B</td></tr>";


$queryListActivitiesC = "SELECT * FROM `ACTIVITIES` WHERE `ActID` LIKE 'C%' ORDER BY ActID ASC";
$inputListActivitiesC = $conn->query($queryListActivitiesC);
if ($inputListActivitiesC->num_rows > 0) {
	while($row = $inputListActivitiesC->fetch_assoc()) {
		echo "<tr>";
		echo "<td><!--<p>-->" . $row['ActName'] . "<!--</p>--></td>";
		
		// for ($i = 0; i <= 12; i++) {
		echo "<td>(0) 0</td><td>(0) 0</td><td>(0) 0</td><td>(0) 0</td><td>(0) 0</td><td>(0) 0</td><td>(0) 0</td><td>(0) 0</td><td>(0) 0</td><td>(0) 0</td><td>(0) 0</td><td>(0) 0</td>";
		// }
		
		echo "</tr>";
		// echo $row["ActID"] . " - " . $row["ActName"] . "<br />";
    }
} else {
    echo "0 results";
}

echo "<tr style=\"background-color: #AAFFAA;\"><td>Total C</td></tr>";


$queryListActivitiesD = "SELECT * FROM `ACTIVITIES` WHERE `ActID` LIKE 'D%' ORDER BY ActID ASC";
$inputListActivitiesD = $conn->query($queryListActivitiesD);
if ($inputListActivitiesD->num_rows > 0) {
	while($row = $inputListActivitiesD->fetch_assoc()) {
		echo "<tr>";
		echo "<td><!--<p>-->" . $row['ActName'] . "<!--</p>--></td>";
		
		// for ($i = 0; i <= 12; i++) {
		echo "<td>(0) 0</td><td>(0) 0</td><td>(0) 0</td><td>(0) 0</td><td>(0) 0</td><td>(0) 0</td><td>(0) 0</td><td>(0) 0</td><td>(0) 0</td><td>(0) 0</td><td>(0) 0</td><td>(0) 0</td>";
		// }
		
		echo "</tr>";
		// echo $row["ActID"] . " - " . $row["ActName"] . "<br />";
    }
} else {
    echo "0 results";
}

echo "<tr style=\"background-color: #FFFFAA;\"><td>Total D</td></tr>";


$conn->close();

?>	

	<tr>
		<td><p>Two</p></td>
		<td><p>Two</p></td>
	</tr>
	<tr class="info">
		<td><p>Total</p></td>
		<td><p>Total</p></td>
	</tr>
	</table>
</div>


<div id="BassClef"></div>

<center><p style="width: 90%; text-align: center; align: center; border: 0px solid #F00;">&#x266b; The Symphony Volunteer Association is proud to support the daily work and mission of the Saint Louis Symphony Orchestra, in order to enrich our worldwide community through the power of music. &#x266b;</p><p>&nbsp;</p></center>



<p>This page was last refreshed on <?php 
	date_default_timezone_set('America/Chicago');
	echo date(DATE_RFC2822) . " (" . date(T) . ")";
?></p>

</div>

</body>
</html>
