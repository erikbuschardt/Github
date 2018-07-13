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
	
	// echo "<p>I certify that these hours submitted are verified true and correct to the best of my knowledge.<br />I acknowledge further that any and all data submitted through this online form is subject to final review.</p>";

	echo "<center><div class=\"g-recaptcha\" data-sitekey=\"6Le1ZCwUAAAAAJ9_CnVItR4iEjk5rGgxBXc_gdQ7\"></div></center>";

	// echo "<button class=\"g-recaptcha\" data-sitekey=\"6LfYfDAUAAAAAKQkZDwW-8rfHCCwvv_kbjVnaxuS\" data-callback=\"YourOnSubmitFn\" type='submit' name='formSubmit'>Submit</button>";
	
	echo "<center><input class='btn' type='submit' name='formSubmit' value='SUBMIT HOURS' style='font-size: 110%; background-color: #A00; color: #DADADA; font-weight: bold; width: 50%;' /></center></form><!--</div>-->";

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
                                                    Search By Last Name: <input type="text" id="input-bts-ex-5" class="form-control live-search" 
														tabindex="1" style="border: 2px solid #A00; padding: 0px 0px 0px 5px; width: 100%;" />
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
