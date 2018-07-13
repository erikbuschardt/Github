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

@import url('https://fonts.googleapis.com/css?family=PT+Mono');

/* table { border: 1px solid #000; } */

table tr th { /* background: #EEE; */ 
	border-bottom: 1px solid #000; }

table tr th, table tr td { 
	/*
	padding: 5px; margin: 2px; 
	*/
	text-align: center; align: center; }

table tr td { border: 0px solid #AAA; }

p { font-family: 'PT Mono', monospace; 
	/* font-size: 100%; */ }

</style>

</head>
<body>

<div class="container">

<div class="table-responsive">
	<table class="table table-striped table-bordered table-hover table-condensed">
	<tr>
		<th><p>Committee&nbsp;Name</p></th>
		<th><p>Sep</p></th>
	</tr>
	<tr>
		<td><p>Membership</p></td>
		<td><p>One</p></td>
	</tr>
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
