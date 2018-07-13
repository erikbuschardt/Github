<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">
<head>
<link href="https://fonts.googleapis.com/css?family=Cabin&amp;subset=latin-ext" rel="stylesheet">
<link rel="shortcut icon" href="/assets/images/icons/SVA.ico" />
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Symphony Volunteer Association - The Saint Louis Symphony Orchestra, St. Louis, Missouri, USA</title>
<style type="text/css">
	body {
		background-image: url('/assets/images/Powell_Auditorium_credit_Dan_Dreyfus_red.jpeg');
		background-size: cover;
		background-repeat: no-repeat;
		background-color: #A00;
	}
	p { 
		font-family: 'Cabin', sans-serif; 
		font-size: 250%;
		text-shadow: 2px 2px #ffffff;
		font-weight: bold;
	}
	pre {
		font-size: 200%;
		text-shadow: 1px 1px #ffffff;
		font-weight: bold;
	}
	.btn {
		border: 3px solid #111;
		border-radius: 26px;
		padding: 13px;
		background: linear-gradient(#C00, #900); /* Standard syntax */
		color: #EEE;
		font-family: 'Cabin', sans-serif; 
		font-size: 250%;
		text-shadow: 3px 3px #111;
		font-weight: bold;
		text-decoration: none;
		box-shadow: 3px 3px 3px #888;
		margin-right: 13px;
	}
	.btn:hover {
		background: linear-gradient(#F00, #C00); /* Standard syntax */
		color: #FFF;
		text-decoration: underline;
		border: 3px solid #000;
		text-shadow: 3px 3px #111;	
	}
	input, select, option {
		font-family: Courier New;
		font-weight: bold;
		/*font-size: 100%;*/
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
<script type="text/javascript">
function chBackcolor(color) {
	document.getElementById("certification").style.background = color;
	// document.body.style.background = color;
}
</script>
<script src='https://www.google.com/recaptcha/api.js'></script>
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
</head>

<body>

<p style="align: center; text-align: center;"><img src="SVA.png" alt="St Louis Symphony Volunteer Association" 
	style="width: 65%; -webkit-filter: drop-shadow(0px 0px 13px #FFF); filter: drop-shadow(0px 0px 13px #FFF);" /></p>

<!--<img src="cooltext252947632502234.png" style="width: 100%; -webkit-filter: drop-shadow(3px 3px 3px #AAA); filter: drop-shadow(3px 3px 3px #AAA);" />-->

<div style="background-color: rgba(255,255,255,0.75); width: 90%; margin: 0 auto; padding: 13px; border-radius: 26px; text-align: center; align: center;">

	<!--<div style="background-color: rgba(255,255,255,0.25); margin-top: 13px;">-->

	<p>SVA MEMBERSHIP DATABASE</p>

	<p style="color: #EE7600;">- PLEASE BE ADVISED -<br />THIS PAGE IS CURRENTLY UNDER CONSTRUCTION.</p>
	
	<!--<p>Hello and welcome to the St. Louis Symphony Volunteer Association, (SVA).</p>-->
	
	<!--<p>MEMBERSHIP DATABASE</p>-->
	
	<!--<p>OUTPUT TABLE OF MEMBERS FROM MYSQL/PHP CUSTOM BUILT DATABASE</p>-->

<div id="btnMainMenu" style="border: 1px solid #000; margin-bottom: 52px;">
	<a class="btn" href="javascript:ajaxpage('enter.php', 'MainArea');">Enter Hours</a>
	<a class="btn" href="javascript:ajaxpage('report.php', 'MainArea');">Reporting</a>
</div>

<div id="contentarea"></div>
<div id="MainArea"></div>
	
<script type="text/javascript">
ajaxpage('report.php', 'MainArea')
</script>

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

