<pre><?php
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

// echo "Number of hours as SVA President during 1617 season: ";

// echo '<table cellspacing="0" cellpadding="0" border="0" style="border: 1px solid #AAA; padding: 5px;"><tr><th>COMMITTEE NAME</th><th>TOTAL</th></tr><tr><td>';

$qSelectAA = "SELECT ActName FROM `ACTIVITIES` WHERE ActID LIKE 'AA'"; $rSelectAA = $conn -> query($qSelectAA); 
	while ( $row = $rSelectAA -> fetch_assoc() ) { echo $row['ActName'] . '&nbsp;'; }

// echo '</td><td>';

$qNumHrsAA171802 = "SELECT Hours FROM `HOURS` RIGHT JOIN `MEMBERS` ON `MEMBERS`.VolID = `HOURS`.VolunteerID JOIN `ACTIVITIES` ON `ACTIVITIES`.ActID = `HOURS`.Activity WHERE Month LIKE '171802' AND `ACTIVITIES`.ActID LIKE 'AA'";
$rNumHrsAA171802 = $conn -> query($qNumHrsAA171802);
$sumNumHrsAA171802 = 0; while ( $row = $rNumHrsAA171802 -> fetch_assoc() ) { $sumNumHrsAA171802 += $row['Hours']; } echo $sumNumHrsAA171802;


$qTotNumHrsAA1718 = "SELECT Hours FROM `HOURS` RIGHT JOIN `MEMBERS` ON `MEMBERS`.VolID = `HOURS`.VolunteerID JOIN `ACTIVITIES` ON `ACTIVITIES`.ActID = `HOURS`.Activity WHERE Month LIKE '1718%' AND `ACTIVITIES`.ActID LIKE 'AA'";
$rTotNumHrsAA1718 = $conn -> query($qTotNumHrsAA1718);
$sumHoursAA1718 = 0; while ( $row = $rTotNumHrsAA1718 -> fetch_assoc() ) { $sumHoursAA1718 += $row['Hours']; } echo $sumHoursAA1718;

// echo '</td></tr></table>';

$conn->close();

?></pre>