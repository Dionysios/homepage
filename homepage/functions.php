<?php

function saveIp($ip,$type,$agent,$referer){
	include_once("global.php");
	if ($ip != $homeserver){
		$link =  mysql_connect( $hostname , $username, $password);
		if (!$link) {
			//	 die('Could not connect: ' . mysql_error());
		}
		// echo 'Connected successfully';

		mysql_select_db($dbname);
		$order = "INSERT INTO visitors(ip,type,agent,referrer)
		VALUES
		('$ip','$type','$agent','$referer')";

		$result = mysql_query($order);	//order executes
		if($result){
			//		echo("<br>Input data is succeed");
		} else{
			//		echo("<br>Input data is fail");
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

function get_location_info($ip){

	// this function looks up location info from the maxmind geoip database
	// and returns $country_info array
	global $path_visitor_maps;

	// lookup country info for this ip
	// geoip lookup

	require_once($path_visitor_maps.'include-whos-online-geoip.php');

	$gi = geoip_open_VMWO($path_visitor_maps.'GeoLiteCity.dat', VMWO_GEOIP_STANDARD);

	$record = GeoIP_record_by_addr_VMWO($gi, $ip);
	geoip_close_VMWO($gi);

	$location_info = array();    // Create Result Array

	$location_info['provider']     = '';
	$location_info['city_name']    = (isset($record->city)) ? $record->city : '';
	$location_info['state_name']   = (isset($record->country_code) && isset($record->region)) ? $GEOIP_REGION_NAME[$record->country_code][$record->region] : '';
	$location_info['state_code']   = (isset($record->region)) ? strtoupper($record->region) : '';
	$location_info['country_name'] = (isset($record->country_name)) ? $record->country_name : '--';
	$location_info['country_code'] = (isset($record->country_code)) ? strtoupper($record->country_code) : '--';
	$location_info['latitude']     = (isset($record->latitude)) ? $record->latitude : '0';
	$location_info['longitude']    = (isset($record->longitude)) ? $record->longitude : '0';

	// this fixes accent characters on UTF-8, only when the blog charset is set to UTF-8
	if ( strtolower(get_option('blog_charset')) == 'utf-8' && function_exists('utf8_encode') ) {
		if ($location_info['city_name'] != '' ) {
			$location_info['city_name'] = utf8_encode($location_info['city_name']);
		}
		if ($location_info['state_name'] != '') {
			$location_info['state_name'] = utf8_encode($location_info['state_name']);
		}
		if ($location_info['country_name'] != '') {
			$location_info['country_name'] = utf8_encode($location_info['country_name']);
		}
	}

	return $location_info;
}

/* function checkIf Spider  */
function is_bot($agent) {

	$spiders = file("/var/www/homepage/robots.txt");
	$string = implode('|',$spiders);

	$pos = strpos( $string, $agent);

	if ($pos === false) {
		return false;
	} else {
		return true;
	}
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

?>
