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

</style>

</head>
<body>

<div class="container">

<div class="table-responsive">
	<table class="table table-striped table-bordered table-hover table-condensed">
	<tr>
		<th>Committee&nbsp;Name</th>
		<th>Sep</th>
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

$sql2 = "SELECT * FROM `ACTIVITIES` ORDER BY ActID ASC";
$result2 = $conn->query($sql2);
if ($result2->num_rows > 0) {
	while($row = $result2->fetch_assoc()) {
		echo "<tr><td><!--<p>-->" . $row["ActName"] . "<!--</p>--></td><td>0</td></tr>";
		// echo $row["ActID"] . " - " . $row["ActName"] . "<br />";
    }
} else {
    echo "0 results";
}

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
