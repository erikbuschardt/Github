<html>
<head>
<title>SVA Full Slice And Dice Report</title>
<meta http-equiv="refresh" content="60">
<style>
@import url('https://fonts.googleapis.com/css?family=PT+Mono');
table { border: 1px solid #000; }
table tr th { background: #EEE; border-bottom: 1px solid #000; }
table tr th, table tr td { padding: 5px; margin: 2px; text-align: center; align: center; }
table tr td { border: 0px solid #AAA; }
table tr th, table tr td, p { font-family: 'PT Mono', monospace; }
</style>
</head>
<body>

<table cellspacing="0" cellpadding="0" border="0">
<tr><th>Header</th></tr>
<tr><td>1</td></tr>
</table>

<p>This page was last refreshed on 
<?php 
	date_default_timezone_set('America/Chicago');
	echo date(DATE_RFC2822) . " (" . date(T) . ")";
?>
</p>
</body>
</html>
