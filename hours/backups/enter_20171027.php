<p>Enter.php</p>

<p><pre><?php
$servername = "localhost";
$username = "kunstdes_admin";
$password = "EsUoB2GFg:%M8_";
$dbname = "kunstdes_SVA_01";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) { die("Connection failed: " . $conn->connect_error); } 

echo "<form action='pdo.php' method='post'>";
	
	$nextMonth = ((date(m)+1) < 10 ) ? "0".(date(m)+1) : (date(m)+1);
	$thisMonth = ((date(m)) < 10 ) ? "0".(date(m)) : (date(m));
	$lastMonth = ((date(m)-1) < 10 ) ? "0".(date(m)-1) : (date(m)-1);

	$thisMonthName = date(F, mktime(0, 0, 0, $thisMonth, 30, 1997));
	$lastMonthName = date(F, mktime(0, 0, 0, $lastMonth, 30, 1997));
	
	$x = date(y) - 1;
	$X = date(Y) - 1;
	$y = date(y);
	$Y = date(Y);
	$z = date(y) + 1;
	$Z = date(Y) + 1;
	$slsoSeason = $y . $z; // '1718'	
	$slsoSeasonLY = $x . $y; // '1617'	

	echo "<p>Select Month:<br /><select name='formMonth'><option value='0'>Select One...</option>";

	echo "<option value='" . $slsoSeason . $thisMonth . "'>" . strtoupper($thisMonthName) . " (" . $slsoSeason . " SEASON)</option>";

	echo "<option value='" . $slsoSeason . $lastMonth . "'>" . strtoupper($lastMonthName) . " (" . (($lastMonth == '8') ? $slsoSeasonLY : $slsoSeason) . " SEASON)</option>";

	// echo "<option value='171810'>OCTOBER 2017 (1718 SEASON)</option>";
	// echo "<option value='171809'>SEPTEMBER 2017 (1718 SEASON)</option>";
	// echo "<option value='161708'>AUGUST 2017 (1617 SEASON)</option>";
	// echo "<option value='161707'>JULY 2017 (1617 SEASON)</option>";
	
	echo "</select></p>";	
	
	// echo "<p>ACTIVITIES</p>";

$sql2 = "SELECT * FROM `ACTIVITIES` ORDER BY ActID ASC";

$result2 = $conn->query($sql2);

if ($result2->num_rows > 0) {
    // output data of each row
    
    	echo "<p>Select Activity:<br /><select name='formActivity'>";
    	echo "<option value='NONE'>Select One...</option>";
    
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

	echo "<p>Select Volunteer:<br /><select name='formVolunteer'>";
	echo "<option value='0'>Select One...</option>";

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

	echo "<p>Enter # of hours: <input type='text' name='formHours' size='5' value='" . $varHours . "'></p>";

	echo "<!--<center><div style='border: 3px solid #000; padding: 13px; width: 90%; font-size: 100%; font-style: italic; margin: 13px;' id='myDIV'>--><p><input type='checkbox' name='certification' id='certification' value='CertifyTrueAndCorrect' required='required'><label for='certification'><br />I certify that these hours submitted<br />are verified true and correct to the best <br />of my knowledge.  I acknowledge further<br />that any and all data submitted through<br />this online form is subject to final review.</label></p><!--</div></center>--><br />";

	echo "<center><div class=\"g-recaptcha\" data-sitekey=\"6Le1ZCwUAAAAAJ9_CnVItR4iEjk5rGgxBXc_gdQ7\"></div></center>";

	// echo "<button class=\"g-recaptcha\" data-sitekey=\"6LfYfDAUAAAAAKQkZDwW-8rfHCCwvv_kbjVnaxuS\" data-callback=\"YourOnSubmitFn\" type='submit' name='formSubmit'>Submit</button>";
	
	echo "<input class='btn' type='submit' name='formSubmit' value='Submit' /></form>";

?></pre></p>