<!DOCTYPE html><html lang="en"><head>
<title>Symphony Volunteer Association - Membership Hours Database</title>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta charset="utf-8"><meta http-equiv="refresh" content="300">
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
	#report { float: right; width: 50%; }
	#enter { width: 45%; }
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

/* CSS Checkbox */

input[type=checkbox].css-checkbox {
	position: absolute;
	z-index: -1000;
	left: -1000px;
	overflow: hidden;
	clip: rect(0 0 0 0);
	height: 1px;
	width: 1px;
	margin: -1px;
	padding: 0px;
	border: 0px;
}

input[type=checkbox].css-checkbox + label.css-label {
	padding-left: 55px;
	height: 50px; 
	display: inline-block;
	line-height: 50px;
	background-repeat: no-repeat;
	background-position: 0 0;
	/* font-size: 50px; */
	vertical-align: middle;
	cursor: pointer;
}

input[type=checkbox].css-checkbox:checked + label.css-label {
	background-position: 0 -50px;
}

label.css-label {
	background-image: url(csscheckbox.png);
	-webkit-touch-callout: none;
	-webkit-user-select: none;
	-khtml-user-select: none;
	-moz-user-select: none;
	-ms-user-select: none;
	user-select: none;
}

</style>

</head>
<body>

<div class="container">

<p style="align: center; text-align: center; padding-top: 26px;"><img src="SVA2.png" 
	alt="Saint Louis Symphony Volunteer Association" title="Saint Louis Symphony Volunteer Association"
	style="width: 65%; -webkit-filter: drop-shadow(5px 5px 5px #FFF); filter: drop-shadow(5px 5px 5px #FFF);" /></p>

	<p style="align: center; text-align: center; font-weight: bold;">SVA MEMBERSHIP HOURS DATABASE<br />
		<span class="editionDesktopLaptop">DESKTOP / LAPTOP EDITION</span>
		<span class="editionTablet">TABLET EDITION</span>
		<span class="editionMobile">MOBILE EDITION</span>
	</p>
	
	<div id="TrebleClef"></div>	

	<div id="report" style="">

<h2>Hours reported here:</h2>
<!--<p>Report.php</p>-->

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

/*
echo "ACTIVITIES table dump<br /><br />";

$sql2 = "SELECT * FROM `ACTIVITIES` ORDER BY ActID ASC";
$result2 = $conn->query($sql2);
if ($result2->num_rows > 0) {
	while($row = $result2->fetch_assoc()) {
		echo $row["ActID"] . " - " . $row["ActName"] . "<br />";
    }
} else {
    echo "0 results";
}
*/

// echo "<br /><br />";

/*
echo "MEMBERS table dump<br /><br />";

$sql = "SELECT * FROM `MEMBERS` ORDER BY LastName ASC";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
		// echo "Vol ID #: " . $row["VolID"] . "<br />";
		echo $row["LastName"] . ", " . $row["FirstName"] . "<br />";
		// echo "Phone: " . $row["Phone"] . "<br /><br />";
    } 
} else {
    echo "0 results";
}
*/

// echo '<p>HOURS table dump<br />';

$queryDataBaseTimeStamp = "SELECT TimeStamp FROM HOURS ORDER BY TimeStamp DESC LIMIT 1";

$resultDataBaseTimeStamp = $conn -> query($queryDataBaseTimeStamp);

if ( $resultDataBaseTimeStamp -> num_rows > 0 ) {
while( $row = $resultDataBaseTimeStamp -> fetch_assoc() ) {
	echo "Database last modified: " . $row['TimeStamp'] . "<br />";
	// } else { 
	// echo "0 results"; 
} 
}

echo '</p>';


$sql3 = "SELECT * FROM `HOURS` RIGHT JOIN `MEMBERS` ON `MEMBERS`.VolID = `HOURS`.VolunteerID JOIN `ACTIVITIES` ON `ACTIVITIES`.ActID = `HOURS`.Activity ORDER BY UNIX_TIMESTAMP(TimeStamp) DESC";
$result3 = $conn->query($sql3);
if ($result3->num_rows > 0) {

	echo "<center><table cellspacing='0' cellpadding='5' border='1' id='HoursLedger'>"; // Build table
	echo "<tr class='hdr'><td><strong>SUBMITTED</strong></td><td><strong>MONTH</strong></td><td><strong>ACTIVITY</strong></td><td><strong>VOLUNTEER&nbsp;NAME</strong></td><td><strong>HOURS</strong></td><td><strong>DELETE&nbsp;ENTRY?</strong></td></tr>"; // Header values
	while($row = $result3->fetch_assoc()) {

	// echo "<!--<p>-->";
	// echo "Timestamp: " . $row['TimeStamp'] . "<br />";
	// echo "Name: " . $row['LastName'] . ", " . $row['FirstName']. "<br />";
	// echo "Month: " . $row["Month"]. "<br />";
	// echo "Hours: " . $row["Hours"]. "<br />";
	// echo "Activity: " . $row["ActName"];
	// echo "<br /><br /><!--</p>-->";

	echo "<tr style='border-top: 1px solid #AAA;'>";
	echo "<td style='width: 20%; word-wrap: break-word; white-space: normal; padding: 5px;'>" . $row['TimeStamp'] . "</td><td>" . $row["Month"] . "</td>";
	echo "<td style='width: 20%;font-size: 75%; word-wrap: break-word; white-space: normal; padding: 5px;'>" . $row["ActName"] . "</td>";
	echo "<td style='width: 20%; padding: 5px;'><strong>" . $row['LastName'] . "</strong>, <!--<br />--><span style='font-size: 75%;'>" . $row['FirstName'] . "</div></td>";
	echo "<td style='width: 20%; padding: 5px;'>" . $row["Hours"] . "</td>";
	echo "<td style='width: 20%; padding: 5px;'>";
	
// DELETE FUNCTION		
		
$sqlDeleteEntry = "DELETE FROM `HOURS` WHERE `TimeStamp` = " . $row['TimeStamp'];		

echo "<form action='del.php' method='post'>";
echo "<input type='hidden' name='varname' value='" . $row['TimeStamp'] . "'>";
echo "<input class='btn' type='submit' name='formDelete' value='DELETE' style='background-color: #A00; color: #DADADA; font-weight: bold; box-shadow: 5px 5px 13px #AAA;' />";
// echo " <span style='color: #F00;'>&#x2715;<!--X--></span> ";
echo "</form>";
		
		echo "</td></tr>";
		// echo 'true';
	} 
	echo "</table></center>"; // End build table 
	} else { 
	echo "0 results"; 
}






$x = date(y) - 1;
$y = date(y);
$z = date(y) + 1;
echo "<p>Total reported hours for " . $y . $z . ": ";
$query06 = "SELECT Hours FROM `HOURS` RIGHT JOIN `MEMBERS` ON `MEMBERS`.VolID = `HOURS`.VolunteerID JOIN `ACTIVITIES` ON `ACTIVITIES`.ActID = `HOURS`.Activity WHERE Month LIKE '".$y.$z."%' ORDER BY UNIX_TIMESTAMP(TimeStamp) DESC";
$result06 = $conn -> query($query06);
$sumHoursThisSeason = 0;
while ( $row = $result06 -> fetch_assoc() ) { $sumHoursThisSeason += $row['Hours']; }
echo $sumHoursThisSeason;
echo "</p>";

echo "<p>Number of volunteers for " . $y . $z . ": ";
$queryNumActiveParticipants = "SELECT COUNT(*) FROM `HOURS` RIGHT JOIN `MEMBERS` ON `MEMBERS`.VolID = `HOURS`.VolunteerID JOIN `ACTIVITIES` ON `ACTIVITIES`.ActID = `HOURS`.Activity WHERE Month LIKE '".$y.$z."%' ORDER BY UNIX_TIMESTAMP(TimeStamp) DESC";
// $resultNumActiveParticipants = $conn -> query($queryNumActiveParticipants);
// echo $resultNumActiveParticipants;
echo $queryNumActiveParticipants;
echo "</p>";

$query07 = "SELECT Hours, VolunteerID FROM `HOURS` RIGHT JOIN `MEMBERS` ON `MEMBERS`.VolID = `HOURS`.VolunteerID JOIN `ACTIVITIES` ON `ACTIVITIES`.ActID = `HOURS`.Activity WHERE Month LIKE '1617%' ORDER BY Hours DESC LIMIT 3";
$result07 = $conn -> query($query07);
if ($result07->num_rows > 0) {
	while($row = $result07->fetch_assoc()) { 
		echo $row['Hours'] . " by " . $row['VolunteerID'] . ", ";
	}
}

echo "</p>";

echo "<p>Top 10 Activities for 1617: yyy</p>";

echo "<p>Total reported hours for 1617: ";

$query05 = "SELECT Hours FROM `HOURS` RIGHT JOIN `MEMBERS` ON `MEMBERS`.VolID = `HOURS`.VolunteerID JOIN `ACTIVITIES` ON `ACTIVITIES`.ActID = `HOURS`.Activity WHERE Month LIKE '1617%' ORDER BY UNIX_TIMESTAMP(TimeStamp) DESC";

$result05 = $conn -> query($query05);

$sumHours1617 = 0;

while( $row = $result05 -> fetch_assoc() ) {
// while ($row = mysql_fetch_assoc($result05)){
    $sumHours1617 += $row['Hours'];
}

echo $sumHours1617;


echo '</p>';



$conn->close();

?>	
	
	
	
	
	
	
	
	



		<?php 
			# include("report.php"); 
		?>	
	</div>
	
	<div id="enter" style="">

	
	
	
<h2>Enter hours here:</h2>
	
	<!--<p>Enter.php</p>-->
<!-- Styling thanks to https://www.w3schools.com/css/css_form.asp -->
<style>
/* body { background-color: #F00; } */
input {
	width: 90%;
}
input[type=text] {
	width: 100%;
	padding: 12px 20px;
	margin: 8px 0;
	box-sizing: border-box;
	border-radius: 5px;
	outline: none;
}
input[type=text]:focus {
	background-color: lightyellow; /*lightblue*/
	border: 2px solid #555;
}
select {
	width: 100%;
	padding: 16px 20px;
	border: 2px solid #555;
	border-radius: 4px;
	background-color: #F1F1FF; /*#f1f1f1;*/
	outline: none;
}
select:hover {
	background-color: lightyellow;
}
textarea {
	width: 100%;
	/*height: 50px;*/
	padding: 12px 20px;
	box-sizing: border-box;
	border: 2px solid #ccc;
	border-radius: 5px;
	background-color: #f8f8f8;
	font-size: 16px;
	resize: none;
}
</style>
<p><!--<pre>--><?php
$servername = "localhost";
$username = "kunstdes_admin";
$password = "EsUoB2GFg:%M8_";
$dbname = "kunstdes_SVA_01";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) { die("Connection failed: " . $conn->connect_error); } 

// echo '<div class="formTable">';

echo "<form action='pdo.php' method='post'>"; // class='formTable'

$nextMonth = ((date(m)+1) < 10 ) ? "0".(date(m)+1) : (date(m)+1);
$thisMonth = (date(m));
$lastMonth = ((date(m)-1) < 10 ) ? "0".(date(m)-1) : (date(m)-1);
if ( $lastMonth == "00" ) { $lastMonth = "12"; } 
$thisMonthName = date(F, mktime(0, 0, 0, $thisMonth, 30, 1997));
$lastMonthName = date(F, mktime(0, 0, 0, $lastMonth, 30, 1997));

$x = date(y) - 1;
$X = date(Y) - 1;
$y = date(y);
$Y = date(Y);
$z = date(y) + 1;
$Z = date(Y) + 1;

if (date(n) < "9") {
	$slsoSeason = $x . $y; 
	$slsoSeasonLY = $x . $y; 
	} else {
	$slsoSeason = $y . $z; // '1718'	
	$slsoSeasonLY = $x . $y; // '1617'	
}

echo "<center><p><!--Select Month:<br />--><select name='formMonth'><option value='0'>Select One Month<!-- From Below-->...</option>";
echo "<option value='" . $slsoSeason . $thisMonth . "'>" . strtoupper($thisMonthName) . " (" . $slsoSeason . " SEASON)</option>";
echo "<option value='" . $slsoSeason . $lastMonth . "'>" . strtoupper($lastMonthName) . " (" . (($lastMonth <= '8') ? $slsoSeasonLY : $slsoSeason) . " SEASON)</option>";

echo "</select></p>";	
$sql2 = "SELECT * FROM `ACTIVITIES` ORDER BY ActID ASC";
$result2 = $conn->query($sql2);
if ($result2->num_rows > 0) {
    // output data of each row
    	echo "<p><!--Select Activity:<br />--><select name='formActivity'>";
    	echo "<option value='NONE'>Select One Activity<!-- From Below-->...</option>";
    while($row = $result2->fetch_assoc()) {
	echo "<option value='" . $row["ActID"] . "'>" . $row["ActName"] . "</option>";
	// echo "ActID #: " . $row["ActID"] . " - Name: " . $row["ActName"] . "<br />";
    }
    
    echo "</select></p>";
    
} else {
    echo "0 results";
}

	// echo "<p>MEMBERS</p>";

$sql = "SELECT * FROM `MEMBERS` ORDER BY LastName ASC";

// $sql = "SELECT id, firstname, lastname FROM MyGuests";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row

	echo "<p><!--Select Volunteer:<br />--><select name='formVolunteer'>";
	echo "<option value='0'>Select One Volunteer<!-- From Below-->...</option>";

    while($row = $result->fetch_assoc()) {

	echo "<option value='" . $row["VolID"] . "'>" . $row["LastName"] . ", " . $row["FirstName"] . "</option>";
	// echo "Vol ID #: " . $row["VolID"] . " - Name: " . $row["LastName"] . ", " . $row["FirstName"] . " - Phone: " . $row["Phone"] . "<br />";
	// echo "<option value='audi'>Audi</option>";

    }

	echo "</select></p>"; 
	
} else {
    echo "0 results";
}

$conn->close();

	echo "<p>Enter Total # of hours:<br /><input type='text' name='formHours' size='5' value='" . $varHours . "'></p>";

	echo "<textarea rows=\"2\">Extra Comments...</textarea>";
	
	echo "<div style='border: 3px solid #000; padding: 13px; font-style: italic; margin-top: 13px; border-radius: 5px;'><input type='checkbox' name='certification' id='certification' value='CertifyTrueAndCorrect' required='required'><label for='certification'><p>I certify that these hours submitted are verified true and correct to the best of my knowledge.<br />I acknowledge further that any and all data submitted through this online form is subject to final review.</p></label></div></center><br />";
	
	// http://www.csscheckbox.com/
	
	echo '<input type="checkbox" name="checkboxG1" id="checkboxG1" class="css-checkbox" /><label for="checkboxG1" class="css-label">&nbsp;Option 1</label>';
	
	// <!--<h1 style="margin:0; margin-top:10px; padding:0; padding-left:25px; padding-bottom:10px; font-family:sans-serif;">CSS Checkboxes!</h1><div style="background:#444; color:#fafafa; padding:10px;"><h3>Dark Background</h3><table><tr><td>-->
	// <!--</td><td><input type="checkbox" name="checkboxG2" id="checkboxG2" class="css-checkbox" checked="checked"/><label for="checkboxG2" class="css-label">Option 2</label></td><td><input type="checkbox" name="checkboxG3" id="checkboxG3" class="css-checkbox" /><label for="checkboxG3" class="css-label">Option 1</label></td></tr></table></div><div style="background:#fafafa; color:#222; padding:10px;"><h3>Light Background</h3><table><tr><td><input type="checkbox" name="checkboxG4" id="checkboxG4" class="css-checkbox" /><label for="checkboxG4" class="css-label">Option 1</label></td><td><input type="checkbox" name="checkboxG5" id="checkboxG5" class="css-checkbox" checked="checked"/><label for="checkboxG5" class="css-label">Option 2</label></td><td><input type="checkbox" name="checkboxG6" id="checkboxG6" class="css-checkbox" /><label for="checkboxG6" class="css-label">Option 1</label></td></tr></table></div>-->
	
	
	// echo "<p>I certify that these hours submitted are verified true and correct to the best of my knowledge.<br />I acknowledge further that any and all data submitted through this online form is subject to final review.</p>";

	echo "<center><div class=\"g-recaptcha\" data-sitekey=\"6Le1ZCwUAAAAAJ9_CnVItR4iEjk5rGgxBXc_gdQ7\"></div></center>";

	// echo "<button class=\"g-recaptcha\" data-sitekey=\"6LfYfDAUAAAAAKQkZDwW-8rfHCCwvv_kbjVnaxuS\" data-callback=\"YourOnSubmitFn\" type='submit' name='formSubmit'>Submit</button>";
	
	echo "<center><input class='btn' type='submit' name='formSubmit' value='SUBMIT HOURS' style='font-size: 110%; background-color: #A00; color: #DADADA; font-weight: bold; width: 50%; box-shadow: 5px 5px 13px #AAA;' /></center></form><!--</div>-->";

?><!--</pre>--></p>

<!--
<div class="dropdown">
  <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Dropdown Example
  <span class="caret"></span></button>
  <ul class="dropdown-menu">
    <li><a href="#">HTML</a></li>
    <li><a href="#">CSS</a></li>
    <li><a href="#">JavaScript</a></li>
  </ul>
</div>
-->
<!--
<div class="container">
  <h2>Filterable Dropdown</h2>
  <p>Open the dropdown menu and type something in the input field to search for dropdown items:</p>
  <p>Note that we have styled the input field to fit the dropdown items.</p>
  <div class="dropdown">
    <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Dropdown Example
    <span class="caret"></span></button>
    <ul class="dropdown-menu">
      <input class="form-control" id="myInput" type="text" placeholder="Search. . .">
      <li><a href="#">HTML</a></li>
	  <li class="divider"></li>
      <li><a href="#">CSS</a></li>
      <li><a href="#">JavaScript</a></li>
	  <li class="dropdown-header">Dropdown header 1</li> 
      <li><a href="#">jQuery</a></li>
      <li><a href="#">Bootstrap</a></li>
      <li><a href="#">Angular</a></li>
    </ul>
  </div>
</div>-->

<!--
<script>
$(document).ready(function(){
  $("#myInput").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $(".dropdown-menu li").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});
</script>
-->




<!--
            <div class="container">
                <div class="row">
                    <div class="col-sm-6">
                    -->
                    		<!--
                        <h2>Basic dropdown select</h2>
                        <h3>Basic exemple</h3>
                        <p>A simple dropdown select</p>

                        <div class="row">
                            <div class="col-sm-8">
                                <div id="bts-ex-1" class="selectpicker">
                                    <button data-id="prov" type="button" class="btn btn-lg btn-block btn-default dropdown-toggle">
                                        <span class="placeholder">Choose an option</span>
                                        <span class="caret"></span>
                                    </button>
                                    <div class="dropdown-menu">
                                        <ul class="list-unstyled">
                                            <li class="items" data-value="1">Item 1</li>
                                            <li class="items" data-value="2">Item 2</li>
                                            <li class="items" data-value="3">Item 3</li>
                                            <li class="items" data-value="4">Item 4</li>
                                            <li class="items" data-value="5">Item 5</li>
                                        </ul>
                                    </div>
                                    <input type="hidden" name="bts-ex-1" value="">
                                </div>
                            </div>
                        </div>
                        -->

								<!--
                        <h3>Basic exemple <small>- with option group</small></h3>
                        <p>A simple dropdown select with option group title</p>

                        <div class="row">
                            <div class="col-sm-8">
                                <div id="bts-ex-2" class="selectpicker">
                                    <button data-id="prov" type="button" class="btn btn-lg btn-block btn-default dropdown-toggle">
                                        <span class="placeholder">Choose an option</span>
                                        <span class="caret"></span>
                                    </button>
                                    <div class="dropdown-menu">
                                        <ul class="list-unstyled">
                                            <li class="optgroup">
                                                <span class="optgroup-header">List Group</span>
                                                <ul class="list-unstyled">
                                                    <li class="items" data-value="1">Item 1</li>
                                                    <li class="items" data-value="2">Item 2</li>
                                                    <li class="items" data-value="3">Item 3</li>
                                                    <li class="items" data-value="4">Item 4</li>
                                                    <li class="items" data-value="5">Item 5</li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </div>
                                    <input type="hidden" name="bts-ex-2" value="">
                                </div>
                            </div>
                        </div>
                        -->
								
								<!--
                        <h3>Clear button</h3>
                        <p>A simple dropdown select with a button to clear the selection</p>
                        <div class="row">
                            <div class="col-sm-8">
                                <div id="bts-ex-3" class="selectpicker" data-clear="true">
                                    <a href="#" class="clear"><span class="fa fa-times"></span><span class="sr-only">Cancel the selection</span></a>
                                    <button data-id="prov" type="button" class="btn btn-lg btn-block btn-default dropdown-toggle">
                                        <span class="placeholder">Choose an option</span>
                                        <span class="caret"></span>
                                    </button>
                                    <div class="dropdown-menu">
                                        <ul class="list-unstyled">
                                            <li class="items" data-value="1">Item 1</li>
                                            <li class="items selected" data-value="2">Item 2</li>
                                            <li class="items" data-value="3">Item 3</li>
                                            <li class="items" data-value="4">Item 4</li>
                                            <li class="items" data-value="5">Item 5</li>
                                        </ul>
                                    </div>
                                    <input type="hidden" name="bts-ex-3" value="">
                                </div>
                            </div>
                        </div>
                        -->
                   
                    <!--
                    </div>
                    <div class="col-sm-6">
                    -->
                    
                    		<!--
                        <h2>Advanced dropdown select</h2>
                        <h3>Live filtering</h3>
                        <p>An advanced dropdown select with input to filter the list</p>

								                        
                        <div class="row">
                            <div class="col-sm-8">
                                <div id="bts-ex-4" class="selectpicker" data-live="true">
                                    <button data-id="prov" type="button" class="btn btn-lg btn-block btn-default dropdown-toggle">
                                        <span class="placeholder">Choose an option</span>
                                        <span class="caret"></span>
                                    </button>
                                    <div class="dropdown-menu">
                                        <div class="live-filtering" data-clear="true" data-autocomplete="true" data-keys="true">
                                            <label class="sr-only" for="input-bts-ex-4">Search in the list</label>
                                            <div class="search-box">
                                                <div class="input-group">
                                                    <span class="input-group-addon" id="search-icon3">
                                                        <span class="fa fa-search"></span>
                                                        <a href="#" class="fa fa-times hide filter-clear"><span class="sr-only">Clear filter</span></a>
                                                    </span>
                                                    <input type="text" placeholder="Search in the list" id="input-bts-ex-4" class="form-control live-search" aria-describedby="search-icon3" tabindex="1" />
                                                </div>
                                            </div>
                                            <div class="list-to-filter">
                                                <ul class="list-unstyled">
                                                    <li class="filter-item items" data-filter="item 1" data-value="1">item 1</li>
                                                    <li class="filter-item items" data-filter="item 2" data-value="2">item 2</li>
                                                    <li class="filter-item items" data-filter="item 3" data-value="3">item 3</li>
                                                    <li class="filter-item items" data-filter="item 4" data-value="4">item 4</li>
                                                    <li class="filter-item items" data-filter="item 5" data-value="5">item 5</li>
                                                </ul>
                                                <div class="no-search-results">
                                                    <div class="alert alert-warning" role="alert"><i class="fa fa-warning margin-right-sm"></i>No entry for <strong>'<span></span>'</strong> was found.</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <input type="hidden" name="bts-ex-4" value="">
                                </div>
                            </div>
                        </div>
								-->
								
                        <h3>jQuery Filterable Bootstrap Select - Complete example</h3>
                        <p>An advanced dropdown select with input to filter the list, clear button and list option groups</p>

						<!--		
                        <div class="row">
                            <div class="col-sm-8">
                             -->
                                
                                
								
								<div id="bts-ex-5" class="selectpicker" data-clear="true" data-live="true">
                                    <a href="#" class="clear"><span class="fa fa-times"></span><span class="sr-only">Cancel the selection</span></a>
                                    <button data-id="prov" type="button" class="btn btn-lg btn-block btn-default dropdown-toggle">
                                        <span class="placeholder">Select One Volunteer</span>
										<span class="caret"></span>
                                    </button>
                                    <div class="dropdown-menu">
                                        <div class="live-filtering" data-clear="true" data-autocomplete="true" data-keys="true">
                                            <label class="sr-only" for="input-bts-ex-5">Search in the list</label>
                                            <div class="search-box">
                                                <div class="input-group">
                                                    <!--
													<span class="input-group-addon" id="search-icon5">
                                                        <span class="fa fa-search"></span>
                                                        <a href="#" class="fa fa-times hide filter-clear"><span class="sr-only">Clear filter</span></a>
                                                    </span>
													-->
                                                    Search By Last Name: 

<input type="text" id="input-bts-ex-5" class="form-control live-search" tabindex="1" 
style="border: 2px solid #A00; padding: 0px 0px 0px 5px; width: 250px;" />

														<!-- placeholder="Search in this list" -->
														<!-- aria-describedby="search-icon5" -->
                                                </div>
                                            </div>
                                            <div class="list-to-filter">
                                                <ul class="list-unstyled">
                                                    <li class="optgroup">
                                                        <span class="optgroup-header">Current List of Volunteers<!-- <span class="subtext">Here!</span>--></span>
                                                        <ul class="list-unstyled">
														
														
														
<?php
$servername = "localhost";
$username = "kunstdes_admin";
$password = "EsUoB2GFg:%M8_";
$dbname = "kunstdes_SVA_01";
// Create connection
$conn2 = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn2->connect_error) { die("Connection failed: " . $conn2->connect_error); } 
// echo "<form action='pdo.php' method='post'>";
														
$sqlQueryGetMembers = "SELECT * FROM `MEMBERS` ORDER BY LastName ASC";

// $sql = "SELECT id, firstname, lastname FROM MyGuests";
$resultGetMembers = $conn2->query($sqlQueryGetMembers);

if ($resultGetMembers->num_rows > 0) {
    // output data of each row

	// echo "<p><!--Select Volunteer:<br />--><select name='formVolunteer'>";
	// echo "<option value='0'>Select One Volunteer<!-- From Below-->...</option>";

    while($rowMember = $resultGetMembers->fetch_assoc()) {

	
	echo '<li class="filter-item items" data-filter="' . $rowMember["LastName"] . '" data-value="' . $rowMember["VolID"] . '" value="' . $rowMember["VolID"] . '">'.$rowMember["LastName"].', '.$rowMember["FirstName"]. '</li>';
		
//	echo '<li class="filter-item items" data-filter="' . $rowMember["LastName"] . '" data-value="' . $rowMember["VolID"] . '" value="' . $rowMember["VolID"] . '">'.$rowMember["LastName"].', '.$rowMember["FirstName"]. ' (#' .$rowMember["VolID"].') </li>';
	
	// echo "<option value='" . $rowMember["VolID"] . "'>" . $rowMember["LastName"] . ", " . $rowMember["FirstName"] . "</option>";
	// echo "Vol ID #: " . $row["VolID"] . " - Name: " . $row["LastName"] . ", " . $row["FirstName"] . " - Phone: " . $row["Phone"] . "<br />";
	// echo "<option value='audi'>Audi</option>";

    }

	      // echo "</select></p>"; 
		   
} else {
    echo "0 results";
}

$conn->close();														
														
?>

															<!--
                                                            <li class="filter-item items" data-filter="item 2" data-value="2">item 2</li>
                                                            <li class="filter-item items" data-filter="item 3" data-value="3">item 3</li>
                                                            <li class="filter-item items" data-filter="item 4" data-value="4">item 4</li>
                                                            <li class="filter-item items" data-filter="item 5" data-value="5">item 5</li>
															<li class="filter-item items" data-filter="item 5" data-value="5">item 5</li>
															<li class="filter-item items" data-filter="item 5" data-value="5">item 5</li>
															<li class="filter-item items" data-filter="item 5" data-value="5">item 5</li>
															<li class="filter-item items" data-filter="item 5" data-value="5">item 5</li>
															<li class="filter-item items" data-filter="item 5" data-value="5">item 5</li>
															-->





														</ul>
                                                    </li>
                                                </ul>
                                                <div class="no-search-results">
                                                    <div class="alert alert-warning" role="alert"><i class="fa fa-warning margin-right-sm"></i>No entry for <strong>'<span></span>'</strong> was found.</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <input type="hidden" name="bts-ex-5" value="">
                                </div>
								
								
								
                            <!--    
                            </div>
                        </div>
						-->
                    
					<!--</div>-->

							<!--
                    <div class="col-sm-12">
                        <h2>Select filter select</h2>
                        <h3>Basic configuration</h3>
                        <p>Some advanced dropdown select configuration to filter a select while choosing an option in the first one</p>

                        <div class="row">
                            <div class="col-sm-4">
                                <div id="select1" class="selectpicker" data-clear="true" data-autoclose="false" data-live="true" data-filter="select2 select3" data-fmethod="recursive">
                                    <a href="#" class="clear"><span class="fa fa-times"></span><span class="sr-only">Cancel the selection</span></a>
                                    <button data-id="prov" type="button" class="btn btn-lg btn-block btn-default dropdown-toggle">
                                        <span class="placeholder">Choose an option</span>
                                        <span class="caret"></span>
                                    </button>
                                    <div class="dropdown-menu">
                                        <div class="live-filtering" data-clear="true" data-autocomplete="true" data-keys="true">
                                            <label class="sr-only" for="input-bts-ex-5">Search in the list</label>
                                            <div class="search-box">
                                                <div class="input-group">
                                                    <span class="input-group-addon" id="search-icon6">
                                                        <span class="fa fa-search"></span>
                                                        <a href="#" class="fa fa-times hide filter-clear"><span class="sr-only">Clear filter</span></a>
                                                    </span>
                                                    <input type="text" placeholder="Search in the list" id="input-select1" class="form-control live-search" aria-describedby="search-icon6" tabindex="1" />
                                                </div>
                                            </div>
                                            <div class="list-to-filter">
                                                <ul class="list-unstyled">
                                                    <li class="optgroup">
                                                        <span class="optgroup-header">List Group <span class="subtext"></span></span>
                                                        <ul class="list-unstyled">
                                                            <li class="filter-item items" data-filter="item 1" data-value="1">item 1</li>
                                                            <li class="filter-item items" data-filter="item 2" data-value="2">item 2</li>
                                                            <li class="filter-item items" data-filter="item 3" data-value="3">item 3</li>
                                                            <li class="filter-item items" data-filter="item 4" data-value="4">item 4</li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                                <div class="no-search-results">
                                                    <div class="alert alert-warning" role="alert"><i class="fa fa-warning margin-right-sm"></i>No entry for <strong>'<span></span>'</strong> was found.</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <input type="hidden" name="bts-ex-5" value="">
                                </div>
                            </div>

                            <div class="col-sm-4">
                                <div id="select2" class="selectpicker" data-clear="true" data-autoclose="false" data-live="true" data-filter="select3" data-fmethod="recursive">
                                    <a href="#" class="clear"><span class="fa fa-times"></span><span class="sr-only">Cancel the selection</span></a>
                                    <button data-id="prov" type="button" class="btn btn-lg btn-block btn-default dropdown-toggle">
                                        <span class="placeholder">Choose an option</span>
                                        <span class="caret"></span>
                                    </button>
                                    <div class="dropdown-menu">
                                        <div class="live-filtering" data-clear="true" data-autocomplete="true" data-keys="true">
                                            <label class="sr-only" for="input-bts-ex-5">Search in the list</label>
                                            <div class="search-box">
                                                <div class="input-group">
                                                    <span class="input-group-addon" id="search-icon7">
                                                        <span class="fa fa-search"></span>
                                                        <a href="#" class="fa fa-times hide filter-clear"><span class="sr-only">Clear filter</span></a>
                                                    </span>
                                                    <input type="text" placeholder="Search in the list" id="input-select2" class="form-control live-search" aria-describedby="search-icon7" tabindex="1" />
                                                </div>
                                            </div>
                                            <div class="list-to-filter">
                                                <ul class="list-unstyled">
                                                    <li class="optgroup">
                                                        <span class="optgroup-header">List Group <span class="subtext"></span></span>
                                                        <ul class="list-unstyled">
                                                            <li class="filter-item items" data-filter="item 1" data-select1="1" data-value="1">item 1</li>
                                                            <li class="filter-item items" data-filter="item 2" data-select1="2" data-value="2">item 2</li>
                                                            <li class="filter-item items" data-filter="item 3" data-select1="1" data-value="3">item 3</li>
                                                            <li class="filter-item items" data-filter="item 4" data-select1="2" data-value="4">item 4</li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                                <div class="no-search-results">
                                                    <div class="alert alert-warning" role="alert"><i class="fa fa-warning margin-right-sm"></i>No entry for <strong>'<span></span>'</strong> was found.</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <input type="hidden" name="bts-ex-5" value="">
                                </div>
                            </div>

                            <div class="col-sm-4">
                                <div id="select3" class="selectpicker" data-clear="true" data-autoclose="false" data-live="true">
                                    <a href="#" class="clear"><span class="fa fa-times"></span><span class="sr-only">Cancel the selection</span></a>
                                    <button data-id="prov" type="button" class="btn btn-lg btn-block btn-default dropdown-toggle">
                                        <span class="placeholder">Choose an option</span>
                                        <span class="caret"></span>
                                    </button>
                                    <div class="dropdown-menu">
                                        <div class="live-filtering" data-clear="true" data-autocomplete="true" data-keys="true">
                                            <label class="sr-only" for="input-bts-ex-5">Search in the list</label>
                                            <div class="search-box">
                                                <div class="input-group">
                                                    <span class="input-group-addon" id="search-icon8">
                                                        <span class="fa fa-search"></span>
                                                        <a href="#" class="fa fa-times hide filter-clear"><span class="sr-only">Clear filter</span></a>
                                                    </span>
                                                    <input type="text" placeholder="Search in the list" id="input-select3" class="form-control live-search" aria-describedby="search-icon8" tabindex="1" />
                                                </div>
                                            </div>
                                            <div class="list-to-filter">
                                                <ul class="list-unstyled">
                                                    <li class="optgroup">
                                                        <span class="optgroup-header">List Group <span class="subtext"></span></span>
                                                        <ul class="list-unstyled">
                                                            <li class="filter-item items" data-filter="item 1"
                                                                data-select1="1" data-select2="1" data-value="1">Item 1-1</li>
                                                            <li class="filter-item items" data-filter="item 2"
                                                                data-select1="2" data-select2="2" data-value="2">Item 2-2</li>
                                                            <li class="filter-item items" data-filter="item 3"
                                                                data-select1="1" data-select2="2" data-value="3">Item 1-2</li>
                                                            <li class="filter-item items" data-filter="item 4"
                                                                data-select1="1" data-select2="3" data-value="4">Item 1-3</li>
                                                            <li class="filter-item items" data-filter="item 5"
                                                                data-select1="2" data-select2="3" data-value="5">Item 2-3</li>
                                                            <li class="filter-item items" data-filter="item 6"
                                                                data-select1="3" data-select2="3" data-value="6">Item 3-3</li>
                                                            <li class="filter-item items" data-filter="item 7"
                                                                data-select1="1" data-select2="4" data-value="7">Item 1-4</li>
                                                            <li class="filter-item items" data-filter="item 8"
                                                                data-select1="2" data-select2="4" data-value="8">Item 2-4</li>
                                                            <li class="filter-item items" data-filter="item 9"
                                                                data-select1="3" data-select2="4" data-value="9">Item 3-4</li>
                                                            <li class="filter-item items" data-filter="item 10"
                                                                data-select1="4" data-select2="4" data-value="10">Item 4-4</li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                                <div class="no-search-results">
                                                    <div class="alert alert-warning" role="alert"><i class="fa fa-warning margin-right-sm"></i>No entry for <strong>'<span></span>'</strong> was found.</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <input type="hidden" name="bts-ex-5" value="">
                                </div>
                            </div>
                        </div>
                    </div>
                    -->

<!--                    
                </div>
            </div>
-->

        <script src="BootstrapSelect-master/js/vendor/jquery-2.1.4.min.js"></script>
        <script src="BootstrapSelect-master/js/vendor/bootstrap.min.js"></script>
        <script src="BootstrapSelect-master/js/vendor/tabcomplete.min.js"></script>
        <script src="BootstrapSelect-master/js/vendor/livefilter.min.js"></script>
        <script src="BootstrapSelect-master/js/vendor/src/bootstrap-select.js"></script>
        <script src="BootstrapSelect-master/js/vendor/filterlist.min.js"></script>
        <script src="BootstrapSelect-master/js/plugins.js"></script>

	
	
	
	
	<br /><br /><br /><br /><br /><br /><br /><br />
	
	
	
	



		<?php 
			# include("enter.php"); 
		?>
	</div>

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

<h2>Statistics and Analytics:</h2>

<p>SLICE AND DICE section - What are we measuring and how, when, etc.</p>

<h2>And The Awards Go To...</h2>

<p>FINAL AGGREGATE/SUM TABLE DATA HERE</p><p><span style="color: gold;">GOLD</span> / <span style="color: silver;">SILVER</span> / <span style="color: brown;">BRONZE</span> AWARDS??</p>

<br /><br />

<img src="Gold.png" style="width: 50px;">

<img src="Silver.png" style="width: 50px;">

<img src="Bronze.png" style="width: 50px;"><br />

<div id="BassClef"></div>

<center><p style="width: 90%; text-align: center; align: center; border: 0px solid #F00;">&#x266b; 
The Symphony Volunteer Association is proud to support the daily work and mission of the Saint Louis Symphony Orchestra, 
in order to enrich our worldwide community through the power of music. &#x266b;</p><p>&nbsp;</p></center>

<p>This page was last refreshed on <?php 
	date_default_timezone_set('America/Chicago');
	echo date(DATE_RFC2822) . " (" . date(T) . ")";
?></p>

</div>

</body>
</html>