<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		
		<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    	<meta name="description" content="Search Social. Search Easy! Search contents directly in your favorite social network. Facebook, Instagram, Twitter, Youtube, Linkedin, Tumblr, Tripadvisor, Booking" /> 
		<meta name="keywords" content="search, social, search social, social search, social network, social media, twitter, instagram, facebook, tumlr, tripadvisor, booking,youtube, linkeding" />
		<meta name="author" content="">
		
		<link rel="shortcut icon" href="images/browser.png">
				
		<title>Soocials</title>
		
		<link rel="stylesheet" type="text/css" href="style/style_new.css?v=1.1" />
</head>
<body>
<script src="script/_gsb.js"></script>
<div id="headerres">
	<div id="logores">
		<img class="displayedresult" src="images/logo.png" alt="Soocials" title="Soocials" style="width:190px;height:56px;">
	</div>
	<div id="searchres">
		<gcse:searchbox-only resultsUrl="http://www.soocials.com/Result.php"></gcse:searchbox-only>
	</div>
	<div id="brandsres">
		<img class="brands" src="images/instagram124.png" alt="instagram" title="Instagram" style="width:30px;height:30px;">
		<img class="brands" src="images/facebook124.png" alt="facebook" title="Facebook" style="width:30px;height:30px;">
		<img class="brands" src="images/twitter124.png" alt="twitter" title="Twitter" style="width:30px;height:30px;">
		<img class="brands" src="images/youtube124.png" alt="youtube" title="Youtube" style="width:30px;height:30px;">
		<img class="brands" src="images/tumblr124.png" alt="tumblr" title="Tumblr" style="width:30px;height:30px;">
		<img class="brands" src="images/tripadvisor124.png" alt="tripadvisor" title="Tripadvisor" style="width:30px;height:30px;">
		<img class="brands" src="images/booking124.png" alt="booking" title="Booking" style="width:30px;height:30px;">
		<img class="brands" src="images/linkedin124.png" alt="linkedin" title="Linkedin" style="width:30px;height:30px;">
	</div>
</div>

<div id="searchresult">
<gcse:searchresults-only></gcse:searchresults-only>
</div>



<?php

$dbhost = "192.168.0.146";
$dbuser = "phpuser";
$dbpass = "9U8-TuB-7MR-UUq";
$dbname = "PH617921_soocialscom";
$url_full = $_SERVER['QUERY_STRING'];
$url=rawurldecode(substr($url_full, 2,100));
$_url = mysql_real_escape_string($_url);
$date = date('Y-m-d');
$time = date('H:i:s', time());
$lang = $_SERVER['HTTP_ACCEPT_LANGUAGE'];
$_lang = mysql_real_escape_string($_lang);
$oth1 = "";
$oth2 = "";
$oth3 = "";
$oth4 = "";
$oth5 = "";
$oth6 = "";
$oth7 = "";
$oth8 = "";
$oth9 = "";
$oth10 = "";
$oth11 = "";
$oth12 = "";


$conn = mysql_connect($dbhost, $dbuser, $dbpass,$dbname );
if(! $conn )
{
  die('Could not connect: ' . mysql_error());
}
$sql = "INSERT INTO visitlog (`url`, `date`,`time`,`lang`) VALUES ('$url', '$date', '$time' ,'$lang')";

mysql_select_db($dbname);
$retval = mysql_query( $sql, $conn );

mysql_close($conn);


?>
<div id="footer">
<p id="footerline">
<span class="afooter"> &copy; Soocials 2015</span>
<a class="afooter" href="about.html">About</a>
<a class="afooter" href="mailto:info@soocials.com">Contact:</a> <span class="afooter"> info@soocials.com</span>
<a class="afooter" href="#top">Privacy</a>
<a class="afooter" href="#top">Terms</a>
</p>
</div>
</body>
</html>