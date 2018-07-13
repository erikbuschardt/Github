<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en"><head>
<title>Symphony Volunteer Association - The Saint Louis Symphony Orchestra, St. Louis, Missouri, USA</title>
<link href="https://fonts.googleapis.com/css?family=Cabin|Source+Code+Pro&amp;subset=latin-ext" rel="stylesheet">
<link rel="shortcut icon" href="/assets/images/icons/SVA.ico" />
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<style type="text/css">

@media only screen and (min-width: 1000px) { /* min-width: 768px - tablets and desktop */
	#TrebleClef, #BassClef { background-color: #500; width: 100%; height: 5px; }
	body { font-size: 100%; }
	#HoursLedger { display: block; }
}

@media only screen and (min-width: 668px) and (max-width: 999px) { /* (max-width: 767px) and (orientation: portrait) - portrait phones */
	#TrebleClef, #BassClef { background-color: #050; width: 100%; height: 5px; }
	body { font-size: 125%; }
	#HoursLedger { display: block; }
}

@media only screen and (max-width: 667px) { /* max-width: 767px - phones */
	#TrebleClef, #BassClef { background-color: #005; width: 100%; height: 5px; }
	body { font-size: 150%; }
	#HoursLedger { display: none; }
}

	body {
		background-image: url('/assets/images/Powell_Auditorium_credit_Dan_Dreyfus_red.jpeg');
		background-size: cover;
		background-repeat: no-repeat;
		/*background-color: #A00;*/
		background-color: rgba(170,0,0,0.5); 
		background-position: center top; 
		/*opacity:0.5;*/
		font-family: 'Source Code Pro', monospace;
	}
	#content {
		background-color: rgba(255,255,255,0.75); 
		width: 100%; 
		margin: auto; 
		text-align: center; 
		align: center;
		/*border-radius: 26px;*/
	}
	p { 
		font-family: 'Cabin', sans-serif; 
		/*font-size: 100%;*/
		text-shadow: 2px 2px #ffffff;
		font-weight: bold;
	}
	pre {
		/*font-size: 200%;*/
		text-shadow: 1px 1px #ffffff;
		font-weight: bold;
	}
	.btn, g-recaptcha {
		border: 3px solid #111;
		border-radius: 13px;
		padding: 13px;
		background: linear-gradient(#C00, #900); /* Standard syntax */
		color: #EEE;
		font-family: 'Cabin', sans-serif; 
		/*font-size: 250%;*/
		text-shadow: 3px 3px #111;
		font-weight: bold;
		text-decoration: none;
		box-shadow: 3px 3px 3px #888;
		margin-right: 13px;
	}
	.btn:hover, g-recaptcha:hover {
		background: linear-gradient(#F00, #C00); /* Standard syntax */
		color: #FFF;
		/*text-decoration: underline;*/
		border: 3px solid #000;
		text-shadow: 3px 3px #111;	
	}
	input, select, option {
		font-family: 'Source Code Pro', 'Courier New', monospace;
		font-weight: bold;
		font-size: 100%;
		/*width: 100%;*/
	}
	/*
	div:focus {
		background-color:#55FF55;
	}
	*/
	#myDIV {
		align: center;
		text-align: center;
	}
</style>

<style>
table#HoursLedger, table#Activities {
	width: 100%;
	table-layout: fixed;
}
table#HoursLedger tr.hdr td {
	width: 20%;
	align: center;
	text-align: center;
	background-color: #AAA;
}
table#HoursLedger tr td {
	width: 20%;
	align: center;
	text-align: center;
}
.two_chars {
	width: 2ch;
	overflow: hidden;
	white-space: nowrap;
}
</style>

<script type="text/javascript">
function chBackcolor(color) {
	document.getElementById("certification").style.background = color;
	// document.body.style.background = color;
}
</script>

<script type="text/javascript">

/***********************************************
* Dynamic Ajax Content- (c) Dynamic Drive DHTML code library (www.dynamicdrive.com)
* Please keep this notice intact
* Visit Dynamic Drive at http://www.dynamicdrive.com/ for full source code
***********************************************/

var bustcachevar=1 //bust potential caching of external pages after initial request? (1=yes, 0=no)
var loadedobjects=""
var rootdomain="http://"+window.location.hostname
var bustcacheparameter=""

function ajaxpage(url, containerid){
var page_request = false
if (window.XMLHttpRequest) // if Mozilla, Safari etc
page_request = new XMLHttpRequest()
else if (window.ActiveXObject){ // if IE
try {
page_request = new ActiveXObject("Msxml2.XMLHTTP")
} 
catch (e){
try{
page_request = new ActiveXObject("Microsoft.XMLHTTP")
}
catch (e){}
}
}
else
return false
page_request.onreadystatechange=function(){
loadpage(page_request, containerid)
}
if (bustcachevar) //if bust caching of external page
bustcacheparameter=(url.indexOf("?")!=-1)? "&"+new Date().getTime() : "?"+new Date().getTime()
page_request.open('GET', url+bustcacheparameter, true)
page_request.send(null)
}

function loadpage(page_request, containerid){
if (page_request.readyState == 4 && (page_request.status==200 || window.location.href.indexOf("http")==-1))
document.getElementById(containerid).innerHTML=page_request.responseText
}

function loadobjs(){
if (!document.getElementById)
return
for (i=0; i<arguments.length; i++){
var file=arguments[i]
var fileref=""
if (loadedobjects.indexOf(file)==-1){ //Check to see if this object has not already been added to page before proceeding
if (file.indexOf(".js")!=-1){ //If object is a js file
fileref=document.createElement('script')
fileref.setAttribute("type","text/javascript");
fileref.setAttribute("src", file);
}
else if (file.indexOf(".css")!=-1){ //If object is a css file
fileref=document.createElement("link")
fileref.setAttribute("rel", "stylesheet");
fileref.setAttribute("type", "text/css");
fileref.setAttribute("href", file);
}
}
if (fileref!=""){
document.getElementsByTagName("head").item(0).appendChild(fileref)
loadedobjects+=file+" " //Remember this object as being already added to page
}
}
}

</script>
<style type="text/css">

.controlstyle a{ /*links inside DIV sizecontroldiv*/
outline:none;
}

.controlstyle a img{ /*image links inside DIV sizecontroldiv*/
border-width:0;
}

.controlstyle a.selectedcontrol img{ /*selected control's image*/
border-bottom:4px solid darkred;
}

</style>

<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>

<script type="text/javascript" src="fluidtextresizer.js">

/***********************************************
* Fluid Text Resizer- (c) Dynamic Drive DHTML code library (www.dynamicdrive.com)
* Visit http://www.dynamicDrive.com for hundreds of DHTML scripts
* Please keep this notice intact
***********************************************/

</script>

<script type="text/javascript">

var mytextsizer=new fluidtextresizer({
	controlsdiv: "sizecontroldiv", //id of special div containing your resize controls. Enter "" if not defined
	targets: ["body"], //target elements to resize text within: ["selector1", "selector2", etc]
	levels: 5, //number of levels users can magnify (or shrink) text
	persist: "session", //enter "session" or "none"
	animate: 200 //animation duration of text resize. Enter 0 to disable
})

</script>

<script src='https://www.google.com/recaptcha/api.js'></script>

</head>

<body>

<div id="content">

	<p style="align: center; text-align: center; padding-top: 26px;"><img src="SVA.png" alt="St Louis Symphony Volunteer Association" 
		style="width: 65%; -webkit-filter: drop-shadow(0px 0px 13px #FFF); filter: drop-shadow(0px 0px 13px #FFF);" /></p>

	<p>SVA MEMBERSHIP DATABASE</p>

	<div id="TrebleClef"></div>		

	<p style="color: #EE7600;">- PLEASE BE ADVISED -<br />THIS PAGE IS CURRENTLY UNDER CONSTRUCTION.</p>
	
	
	
<div id="sizecontroldiv" class="controlstyle">

Increase/Decrease controls: <a href="#smaller"><img src="fontminus.gif" /></a>  <a href="#bigger"><img src="fontplus.gif" /></a><br /><br />

Font levels controls: <a href="#fontsize-1"><img src="-1.gif" /></a> <a href="#fontsize0"><img src="0.gif" /></a> <a href="#fontsize1"><img src="1.gif" /></a> <a href="#fontsize2"><img src="2.gif" /></a>

</div>

<p>Arbitrary link control: <a href="javascript:mytextsizer.setFontLevel(0)">Set font level to default</a>	
	
	
	
	<!--<p>Hello and welcome to the St. Louis Symphony Volunteer Association, (SVA).</p>-->
	
	<!--<p>MEMBERSHIP DATABASE</p>-->
	
	<!--<p>OUTPUT TABLE OF MEMBERS FROM MYSQL/PHP CUSTOM BUILT DATABASE</p>-->

<div id="btnMainMenu" style="border: 0px solid #000; margin-bottom: 52px;">
	<a class="btn" href="javascript:ajaxpage('enter.php', 'MainArea');">Enter Hours</a>
	<a class="btn" href="javascript:ajaxpage('report.php', 'MainArea');">Reporting</a>
	<a class="btn" href="javascript:ajaxpage('blank.php', 'MainArea');">BLANK</a>
</div>

<div id="contentarea"></div>
<div id="MainArea"></div>
	
<script type="text/javascript">
ajaxpage('report.php', 'MainArea')
</script>

<div id="BassClef"></div>

<center><p style="width: 90%; text-align: center; align: center; border: 0px solid #F00;">&#x266b; The Symphony Volunteer Association is proud to support the daily work and mission of the Saint Louis Symphony Orchestra, in order to enrich our worldwide community through the power of music. &#x266b;</p><p>&nbsp;</p></center>



<!--
<button
class="g-recaptcha"
data-sitekey="6LfKZSwUAAAAAIFSMhKzZ_ndecYJD9q7yIJaheJT"
data-callback="YourOnSubmitFn">
Submit
</button>
-->

	<!--</div>-->

</div>

</body></html>

