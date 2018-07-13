Hello, I am insert.php.

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

	echo "<form action='process.php' method='post'>";
	// echo "<form action='mailto:erik@kunstdesigns.com' method='post'>";

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

	echo "Select Month: <select name='month'><option value='0'>Select One...</option><option value='161707'>JULY 2017</option></select><br />";

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

	echo "Enter Hours: <input type='text' name='hrs' size='5'><br />";

	echo "<center><div style='border: 2px solid #000; padding: 13px; width: 350px; font-size: 50%; font-style: italic; margin: 13px;' id='myDIV'><input type='checkbox' name='certification' id='certification' value='CertifyTrueAndCorrect' required='required'><label for='certification'> I certify that these hours submitted<br />are verified true and correct to the best <br />of my knowledge.  I acknowledge further<br />that any and all data submitted through<br />this online form is subject to final review.</label></div></center><br />";

	echo "<center><div class=\"g-recaptcha\" data-sitekey=\"6Le1ZCwUAAAAAJ9_CnVItR4iEjk5rGgxBXc_gdQ7\"></div></center>";
	
	echo "<input type='submit'></form>";

?></pre></p>