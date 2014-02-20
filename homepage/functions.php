<?php
use GeoIp2\Database\Reader;

function saveIp($ip,$country,$city,$type,$agent,$referer){
	include_once("global.php");
	if ($ip != $homeserver){
		$link =  mysql_connect( $hostname , $username, $password);
		if (!$link) {
			//	 die('Could not connect: ' . mysql_error());
		}
		// echo 'Connected successfully';

		mysql_select_db($dbname);
		$order = "INSERT INTO visitors(ip,country,city,type,agent,referrer)
		VALUES
		('$ip','$country','$city','$type','$agent','$referer')";

		$result = mysql_query($order);	//order executes
		if($result){
			//	echo("<br>Input data is succeed");
		} else{
			//	echo("<br>Input data is fail");
		}
		mysql_close($link);
	}
}

function getRealIp() {
	if (!empty($_SERVER['HTTP_CLIENT_IP'])) {  //check ip from share internet
		$ip=$_SERVER['HTTP_CLIENT_IP'];
	} elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {  //to check ip is pass from proxy
		$ip=$_SERVER['HTTP_X_FORWARDED_FOR'];
	} else {
		$ip=$_SERVER['REMOTE_ADDR'];
	}
	return $ip;
}

// Get the visitors user_agent
function getHttpUserAgent() {
	if (getenv('HTTP_USER_AGENT')) {
		$agent = getenv('HTTP_USER_AGENT');
	} else if (isset($_SERVER['HTTP_USER_AGENT'])) {
		$agent = $_SERVER['HTTP_USER_AGENT'];
	} else {
		//	$agent = 'Check for bot'.$agent;
	}
	return $agent;
}

// Get the visitors http referer
function getHttpReferer() {
	if (getenv('HTTP_REFERER')) {
		$referer = getenv('HTTP_REFERER');
	} else if (isset($_SERVER['HTTP_REFERER'])) {
		$referer = $_SERVER['HTTP_REFERER'];
	} else {
		// sometimes it is just empty
		$referer = '';
	}
	return $referer;
}

function get_location_info($ipAddress) {

	require_once 'vendor/autoload.php';

	// This creates the Reader object, which should be reused across
	// lookups.
	$reader = new Reader('/var/www/homepage/vendor/geoip2/geoip2/maxmind-db/GeoLite2-City.mmdb');

	// Replace "city" with the appropriate method for your database, e.g.,
	// "country".
	//$record = $reader->city('128.101.101.101');
	//$record = $reader->country('128.101.101.101');
	$record = $reader->cityIspOrg($ipAddress);
	$record = $reader->country($ipAddress);
	$record = $reader->city($ipAddress);

	return $record;
}
/* function checkIf Spider  */
function is_bot($agent) {

if ( $spiders = file('/var/www/homepage/bots.txt') ) {
	for ($i=0, $n=sizeof($spiders); $i<$n; $i++) {
		if ( is_integer(strpos($agent, trim($spiders[$i]))) ) {
			//break;
			return true;
		}
	}
}
return false;
}

?>
