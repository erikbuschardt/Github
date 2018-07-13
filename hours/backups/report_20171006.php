<p>Report.php</p>

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

echo "ACTIVITIES table dump<br /><br />";

$sql2 = "SELECT * FROM `ACTIVITIES` ORDER BY ActID DESC";
$result2 = $conn->query($sql2);
if ($result2->num_rows > 0) {
	while($row = $result2->fetch_assoc()) {
		echo $row["ActID"] . " - " . $row["ActName"] . "<br />";
    }
} else {
    echo "0 results";
}

echo "<br /><br />";
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


echo '<p>HOURS table dump<br />';

$query04 = "SELECT TimeStamp FROM HOURS ORDER BY TimeStamp DESC LIMIT 1";

$result04 = $conn -> query($query04);

if ( $result04 -> num_rows > 0 ) {
while( $row = $result04 -> fetch_assoc() ) {
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
	echo "<tr class='hdr'><td><!--Date/Time -->Submitted</td><td>Volunteer</td><td>Month</td><td>Hours</td><td>Activity</td></tr>"; // Header values
	while($row = $result3->fetch_assoc()) {

//		echo "<!--<p>-->";
//		echo "Timestamp: " . $row['TimeStamp'] . "<br />";
//		echo "Name: " . $row['LastName'] . ", " . $row['FirstName']. "<br />";
//		echo "Month: " . $row["Month"]. "<br />";
//		echo "Hours: " . $row["Hours"]. "<br />";
//		echo "Activity: " . $row["ActName"];
//		echo "<br /><br /><!--</p>-->";

		echo "<tr><td style='font-size: 50%; word-wrap: break-word; white-space: normal;'>" . $row['TimeStamp'];
		// echo " <span style='color: #F00;'>X</span> ";
		echo "</td><td>" . $row['LastName'] . "<!--, --><br /><span style='font-size: 50%;'>" . $row['FirstName'] . "</div></td><td>" . $row["Month"] . "</td><td>" . $row["Hours"] . "</td><td style='font-size: 75%; word-wrap: break-word; white-space: normal;'>" . $row["ActName"] . "</td></tr>";
		// echo 'true';
	} 
	echo "</table></center>"; // End build table 
	} else { 
	echo "0 results"; 
}


echo "<p>SLICE AND DICE section - <br />what are we measuring<br />and how, when, etc.</p>";

echo '<p>FINAL AGGREGATE/SUM TABLE DATA HERE</p><p><span style="color: gold;">GOLD</span> / <span style="color: silver;">SILVER</span> / <span style="color: brown;">BRONZE</span> AWARDS??</p>';

echo "<br /><br />";

echo "<img src=\"Bronze.png\" style=\"width: 100px;\">";

echo "<img src=\"Silver.png\" style=\"width: 100px;\">";

echo "<img src=\"Gold.png\" style=\"width: 100px;\">";

echo "Top 10 Volunteers<br />for 1617:<br />xxx<br /><br />";

echo "Top 10 Activities<br />for 1617:<br />yyy<br /><br />";

echo "<p>Total hours for 1617: ";

$query05 = "SELECT SUM(Hours) FROM `HOURS` RIGHT JOIN `MEMBERS` ON `MEMBERS`.VolID = `HOURS`.VolunteerID JOIN `ACTIVITIES` ON `ACTIVITIES`.ActID = `HOURS`.Activity WHERE Month LIKE '1617%' ORDER BY UNIX_TIMESTAMP(TimeStamp) DESC";

$result05 = $conn -> query($query05);

echo $query05;

if ( $result05 -> num_rows > 0 ) {
while( $row = $result05 -> fetch_assoc() ) {

	// $a = array($row['Hours']);
	// echo "sum(a) = " . array_sum($a) . "\n";

	echo $row['Hours'] . " + ";
	// } else { 
	// echo "0 results"; 
} 
}

echo '</p>';


$conn->close();

?>