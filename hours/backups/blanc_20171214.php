<!DOCTYPE html>
<html lang="en">
<head>
<title>SVA Full Slice And Dice Report</title>
<meta http-equiv="refresh" content="60">
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" 
	href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<style>

@import url('https://fonts.googleapis.com/css?family=Source+Code+Pro|PT+Mono');

body { font-family: 'Source Code Pro', 'PT Mono', monospace; }

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

</style>

</head>
<body>

<div class="container">

<div class="table-responsive">
	<table class="table table-striped table-bordered table-hover table-condensed">
	<tr>
		<th>Committee&nbsp;Name</th>
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
		echo "<td><!--<p>-->" . $row['ActName'] . "<!--</p>--></td>";
		
		// for ($i = 0; i <= 12; i++) {
		echo "<td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td>";
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
		echo "<td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td>";
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
		echo "<td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td>";
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
		echo "<td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td>";
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

<p>This page was last refreshed on<br /><?php 
	date_default_timezone_set('America/Chicago');
	echo date(DATE_RFC2822) . " (" . date(T) . ")";
?></p>

</div>

</body>
</html>
