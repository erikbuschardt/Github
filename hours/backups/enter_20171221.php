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

	echo "<center><p><!--Select Month:<br />--><select name='formMonth'><option value='0'>Select One Month<!-- From Below-->...</option>";

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
	
	echo "<div style='border: 3px solid #000; padding: 13px; font-style: italic; margin-top: 13px; border-radius: 5px;'><input type='checkbox' name='certification' id='certification' value='CertifyTrueAndCorrect' required='required'><!--<label for='certification'>--><p>I certify that these hours submitted are verified true and correct to the best of my knowledge.<br />I acknowledge further that any and all data submitted through this online form is subject to final review.</p><!--</label>--></div></center><br />";
	
	// echo "<p>I certify that these hours submitted are verified true and correct to the best of my knowledge.<br />I acknowledge further that any and all data submitted through this online form is subject to final review.</p>";

	echo "<center><div class=\"g-recaptcha\" data-sitekey=\"6Le1ZCwUAAAAAJ9_CnVItR4iEjk5rGgxBXc_gdQ7\"></div></center>";

	// echo "<button class=\"g-recaptcha\" data-sitekey=\"6LfYfDAUAAAAAKQkZDwW-8rfHCCwvv_kbjVnaxuS\" data-callback=\"YourOnSubmitFn\" type='submit' name='formSubmit'>Submit</button>";
	
	echo "<input class='btn' type='submit' name='formSubmit' value='SUBMIT' style='width: 100%; background-color: #A00; color: #DADADA; font-weight: bold;' /></form>";

?></pre></p>

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
</div>

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





